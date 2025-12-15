<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!$data || !isset($data['lenses'])) {
        echo json_encode(['success' => false, 'message' => 'Invalid data']);
        exit;
    }
    
    $lenses = $data['lenses'];
    
    // Read the current index.html
    $indexFile = 'index.html';
    $html = file_get_contents($indexFile);
    
    if ($html === false) {
        echo json_encode(['success' => false, 'message' => 'Could not read index.html']);
        exit;
    }
    
    // Generate new lenses HTML
    $lensesHTML = '';
    foreach ($lenses as $index => $lens) {
        $delay = ($index % 3) * 0.2 + 0.2;
        $lensesHTML .= '                <div class="col-lg-4 col-md-6">
                    <div class="single_lens mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="' . $delay . 's">
                        <div class="lens_video">
                            <video autoplay loop muted playsinline>
                                <source src="' . htmlspecialchars($lens['videoUrl']) . '" type="video/mp4">
                            </video>
                            <div class="lens_overlay">
                                <i class="lni lni-snapchat"></i>
                            </div>
                        </div>
                        <div class="lens_content">
                            <h4 class="lens_title">' . htmlspecialchars($lens['name']) . '</h4>
                            <a href="' . htmlspecialchars($lens['url']) . '" target="_blank" class="lens_btn">Try Lens</a>
                        </div>
                    </div> <!-- single lens -->
                </div>
';
    }
    
    // Find and replace the lenses section
    $pattern = '/(<!-- LENSES START -->).*?(<!-- LENSES END -->)/s';
    $replacement = '$1' . "\n" . $lensesHTML . '                $2';
    
    $newHTML = preg_replace($pattern, $replacement, $html);
    
    if ($newHTML === null) {
        echo json_encode(['success' => false, 'message' => 'Could not update HTML']);
        exit;
    }
    
    // Backup the old file
    copy($indexFile, $indexFile . '.backup');
    
    // Write the new HTML
    if (file_put_contents($indexFile, $newHTML) === false) {
        echo json_encode(['success' => false, 'message' => 'Could not write to index.html']);
        exit;
    }
    
    echo json_encode(['success' => true, 'message' => 'Lenses updated successfully!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>

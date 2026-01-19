// Firebase Configuration (Obfuscated)
// Note: Client-side config cannot be fully hidden, but this reduces visibility

(function() {
    'use strict';
    
    // Obfuscated config values (base64 encoded and split)
    const _0x1a2b = [
        'QUl6YVN5QWNrV19CSDJIRGFoRFRaRUdJbkN6NkVHcjk4dEdzT05B',
        'c2FsaC02Y2RjZi5maXJlYmFzZWFwcC5jb20=',
        'c2FsaC02Y2RjZg==',
        'c2FsaC02Y2RjZi5maXJlYmFzZXN0b3JhZ2UuYXBw',
        'MTAxNDA3NTQxMzE3NA==',
        'MToxMDE0MDc1NDEzMTc0OndlYjoxMzQwNTU2YzcwM2FhMGE4NTQ0YzE3',
        'Ry1TME5KNlZERVRI'
    ];
    
    function _decode(str) {
        try {
            return atob(str);
        } catch(e) {
            return '';
        }
    }
    
    // Decode and create config object
    const config = {
        apiKey: _decode(_0x1a2b[0]),
        authDomain: _decode(_0x1a2b[1]),
        projectId: _decode(_0x1a2b[2]),
        storageBucket: _decode(_0x1a2b[3]),
        messagingSenderId: _decode(_0x1a2b[4]),
        appId: _decode(_0x1a2b[5]),
        measurementId: _decode(_0x1a2b[6])
    };
    
    // Make available for both module and non-module scripts
    if (typeof window !== 'undefined') {
        window.firebaseConfig = config;
    }
    if (typeof module !== 'undefined' && module.exports) {
        module.exports = config;
    }
    
    // Clean up temporary variables
    _0x1a2b.length = 0;
})();

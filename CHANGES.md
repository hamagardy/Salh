# Portfolio Website Updates

## Latest Changes (v3):

### 1. Lens Icon Border Radius
- ✅ Changed lens icons from **circle (50%)** to **10% border radius** (rounded square)
- ✅ More modern, app-like appearance
- ✅ Consistent with Snapchat's design language

### 2. Dynamic Lens Management
- ✅ Added **"+ Add New Lens"** button in upload.html
- ✅ Click to add unlimited new lenses
- ✅ New lenses automatically appear in index.html
- ✅ No more fixed 9-lens limit!

### 3. Remove Lens Feature
- ✅ Added **red "×" remove button** on each lens card
- ✅ Positioned at top-right corner
- ✅ Confirmation dialog before deletion
- ✅ Smooth removal with instant UI update

### 4. Dynamic Rendering
- ✅ index.html now **dynamically generates** lens cards from localStorage
- ✅ Supports any number of lenses (not just 9)
- ✅ Automatically adjusts grid layout
- ✅ Maintains responsive 3-column grid

### 5. UI Improvements
- ✅ Add button with dashed border and hover effect
- ✅ Remove button with hover scale animation
- ✅ Success message shows lens count
- ✅ Better visual feedback for all actions

---

## Previous Changes (v2):

### 1. Lens Hover Icon
- ✅ Changed hover overlay icon from camera to **Snapchat icon**
- ✅ Icon appears in circular badge with pulse animation
- ✅ Snapchat ghost icon shows when hovering over lens videos

### 2. Lens Icon Display
- ✅ Added **circular lens icon** at the top of each lens card
- ✅ Icon appears above the lens title and "Open Lens" button
- ✅ 60px circle on desktop, 40px on mobile
- ✅ Teal border with white background
- ✅ Default icon: `assets/images/logo.svg`

### 3. Button Update
- ✅ Changed button text from "Try Lens" to **"Open Lens"**
- ✅ Removed Snapchat icon from button (now only in hover overlay)
- ✅ Clean, simple button design

### 4. Upload Page Enhancement
- ✅ Added **"Lens Icon URL"** input field
- ✅ Users can now upload custom icon for each lens
- ✅ Icon preview with 🖼️ emoji
- ✅ Supports both local paths and URLs
- ✅ Data structure updated to include `iconUrl` field

### 5. Data Structure
```json
{
  "name": "Lens Name",
  "url": "https://snapchat.com/unlock/...",
  "videoUrl": "assets/videos/lens.mp4",
  "iconUrl": "assets/images/icon.png"  // NEW FIELD
}
```

---

## Previous Changes (v1):

### 1. Meta Tags & Title
- ✅ Updated page title to "Salh Al-Amri - AR Developer & Snapchat Lens Creator"
- ✅ Added meta description with your name and details
- ✅ Added meta author tag with "Salh Al-Amri"

### 2. Navigation
- ✅ Changed navbar brand from text to your profile picture
- ✅ Profile picture is circular with teal border (45x45px)

### 3. Lens Section Updates
- ✅ Changed grid to 3x3 layout (col-6 on mobile, col-4 on tablet/desktop)
- ✅ Made videos square (1:1 aspect ratio) on mobile devices
- ✅ Videos maintain aspect ratio on iPhone 14 Pro Max and all mobile devices

### 4. About Section
- ✅ Profile picture hidden on mobile devices (d-none d-lg-block)
- ✅ Only shows on large screens and above

### 5. Mobile Optimizations
- ✅ Lens titles smaller on mobile (14px)
- ✅ Button text smaller on mobile (12px)
- ✅ Icon sizes adjusted for mobile
- ✅ Padding reduced on mobile for better spacing
- ✅ Square video containers on mobile (like Instagram/Snapchat)

## Grid Layout:
- **Desktop (lg)**: 3 columns (col-lg-4)
- **Tablet (md)**: 3 columns (col-md-4)
- **Mobile (xs)**: 3 columns (col-6) - 2 items per row

## Technical Details:
- Videos use `padding-bottom: 100%` technique for square aspect ratio on mobile
- Absolute positioning ensures video fills the square container
- Circular icon uses CSS animation for pulse effect
- All changes are responsive and work across all devices
- LocalStorage-based content management (no PHP required)

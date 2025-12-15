# Salh Al-Amri - AR Developer Portfolio

A modern, responsive portfolio website for showcasing Snapchat lenses and AR development work.

## ✨ Features

### 🎨 Design
- Modern, clean interface with smooth animations
- Fully responsive (mobile, tablet, desktop)
- Square video format on mobile (Instagram/Snapchat style)
- Large lens icons overlapping videos
- 3x3 grid layout for lenses

### 🌓 Dark Mode
- Toggle dark/light mode
- Preference saved in localStorage
- Smooth transitions between modes
- Dark-optimized colors for all sections

### 🌍 Multi-Language Support
- **English** and **Arabic** (العربية)
- RTL (Right-to-Left) support for Arabic
- Cairo font for Arabic text
- Language preference saved in localStorage
- Complete translation of all content

### 📱 Lens Management
- **Dynamic lens system** - add unlimited lenses
- Upload page for easy content management
- Add new lenses with "+" button
- Remove lenses with "×" button
- No PHP required - uses localStorage
- Changes reflect immediately on main page

### 🎯 Lens Display
- Large circular icons (100px desktop, 70px mobile)
- Icons overlap video by 50px for modern look
- 10% border radius (rounded square)
- White border with shadow
- Snapchat icon on hover overlay
- "Open Lens" button for each lens

## 📁 File Structure

```
├── index.html              # Main portfolio page
├── upload.html             # Lens management page
├── lenses-data.json        # Default lens data
├── assets/
│   ├── css/
│   │   ├── style.css       # Main styles + dark mode + RTL
│   │   ├── bootstrap.min.css
│   │   └── ...
│   ├── js/
│   │   ├── main.js
│   │   └── ...
│   ├── images/
│   │   ├── profile.jpg     # Profile picture
│   │   ├── logo.svg        # Default lens icon
│   │   └── ...
│   └── videos/
│       └── lens*.mp4       # Lens videos
```

## 🚀 How to Use

### 1. Setup
- Open `index.html` in a browser
- No server required (works with file://)

### 2. Manage Lenses
1. Open `upload.html`
2. Edit existing lenses or click "+" to add new ones
3. Fill in:
   - Lens Name
   - Snapchat Lens URL
   - Video URL (local or remote)
   - Lens Icon URL (local or remote)
4. Click "Save All Changes"
5. Refresh `index.html` to see updates

### 3. Dark Mode
- Click the moon/sun toggle in the top-right
- Preference is saved automatically

### 4. Change Language
- Select "English" or "العربية" from dropdown
- Language preference is saved automatically
- Arabic enables RTL layout

## 🎨 Customization

### Colors
Main brand color: `#00A78E` (teal)
- Change in `assets/css/style.css`
- Search for `#00A78E` and replace

### Profile Picture
- Replace `assets/images/profile.jpg`
- Used in navbar and hero section

### Lens Icons
- Default: `assets/images/logo.svg`
- Can be customized per lens in upload page
- Supports PNG, JPG, SVG

### Translations
- Edit translations object in `index.html`
- Add new languages by extending the object
- Update language selector options

## 📱 Responsive Breakpoints

- **Mobile**: < 768px (col-6 = 2 lenses per row)
- **Tablet**: 768px - 991px (col-md-4 = 3 per row)
- **Desktop**: > 992px (col-lg-4 = 3 per row)

## 🌐 Browser Support

- Chrome (recommended)
- Firefox
- Safari
- Edge
- Mobile browsers (iOS Safari, Chrome Mobile)

## 💾 Data Storage

All lens data is stored in browser's localStorage:
- Key: `lensData`
- Format: JSON array
- Persists across sessions
- No backend required

## 🎯 Key Technologies

- HTML5
- CSS3 (Flexbox, Grid, Animations)
- JavaScript (ES6+)
- Bootstrap 4
- WOW.js (scroll animations)
- jQuery
- Google Fonts (Cairo for Arabic)

## 📝 License

See `license.txt` for details.

## 👤 Author

**Salh Al-Amri**
- Snapchat: [@s.8f6](https://www.snapchat.com/add/s.8f6)
- Twitter/X: [@s8f66](https://x.com/s8f66)
- TikTok: [@s.8f6](https://www.tiktok.com/@s.8f6)

---

Made with ❤️ in Riyadh, Saudi Arabia 🇸🇦

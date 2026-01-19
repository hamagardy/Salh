# 🔥 Firebase Setup Guide

This guide will help you set up Firebase Firestore so that lens updates sync across all users and devices.

## Why Firebase?

Previously, the portfolio used `localStorage` which only stores data on each user's browser. Now with Firebase Firestore, when you add or update lenses, **all users will see the changes automatically** in real-time!

## 📋 Step-by-Step Setup

### Step 1: Create a Firebase Project

1. Go to [Firebase Console](https://console.firebase.google.com/)
2. Click **"Add project"** or **"Create a project"**
3. Enter a project name (e.g., "salh-portfolio")
4. Click **"Continue"**
5. Disable Google Analytics (optional, you can enable it later)
6. Click **"Create project"**
7. Wait for project creation, then click **"Continue"**

### Step 2: Enable Firestore Database

1. In your Firebase project dashboard, click **"Firestore Database"** in the left menu
2. Click **"Create database"**
3. Select **"Start in test mode"** (for now - you can secure it later)
4. Choose a location (closest to your users)
5. Click **"Enable"**

### Step 3: Get Your Firebase Configuration

1. In Firebase Console, click the **gear icon** ⚙️ next to "Project Overview"
2. Select **"Project settings"**
3. Scroll down to **"Your apps"** section
4. Click the **Web icon** `</>` to add a web app
5. Register your app with a nickname (e.g., "Portfolio Website")
6. **Copy the Firebase configuration object** - it looks like this:

```javascript
const firebaseConfig = {
    apiKey: "AIzaSyXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
    authDomain: "your-project-id.firebaseapp.com",
    projectId: "your-project-id",
    storageBucket: "your-project-id.appspot.com",
    messagingSenderId: "123456789012",
    appId: "1:123456789012:web:abcdef1234567890"
};
```

### Step 4: Configure Your Website

1. Open `firebase-config.js` in your project
2. Replace all the placeholder values with your actual Firebase config values:

```javascript
const firebaseConfig = {
    apiKey: "AIzaSyXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",  // Your actual API key
    authDomain: "your-project-id.firebaseapp.com",  // Your actual domain
    projectId: "your-project-id",                    // Your actual project ID
    storageBucket: "your-project-id.appspot.com",    // Your actual storage bucket
    messagingSenderId: "123456789012",              // Your actual sender ID
    appId: "1:123456789012:web:abcdef1234567890"     // Your actual app ID
};
```

3. Save the file

### Step 5: Set Up Firestore Security Rules (Important!)

1. In Firebase Console, go to **Firestore Database** → **Rules**
2. Replace the rules with this (allows read/write for now - you can secure later):

```javascript
rules_version = '2';
service cloud.firestore {
  match /databases/{database}/documents {
    match /lenses/{document=**} {
      allow read: if true;
      allow write: if true;
    }
  }
}
```

3. Click **"Publish"**

**⚠️ Note:** These rules allow anyone to read/write. For production, you should add authentication. For now, this works for testing.

### Step 6: Test It!

1. Open `upload.html` in your browser
2. Make some changes to your lenses
3. Click **"Save All Changes"**
4. You should see: **"✓ Changes saved to cloud! All users will see updates automatically."**
5. Open `index.html` in another browser/device
6. The lenses should update automatically!

## ✅ Verification Checklist

- [ ] Firebase project created
- [ ] Firestore Database enabled
- [ ] Firebase config copied to `firebase-config.js`
- [ ] Security rules published
- [ ] Tested saving lenses in `upload.html`
- [ ] Tested viewing lenses in `index.html`
- [ ] Tested on different browser/device

## 🔒 Security (Optional - For Later)

For production, you should secure your Firestore rules. Here's a basic example:

```javascript
rules_version = '2';
service cloud.firestore {
  match /databases/{database}/documents {
    match /lenses/{document=**} {
      // Anyone can read
      allow read: if true;
      // Only authenticated users can write (you'll need to add auth)
      allow write: if request.auth != null;
    }
  }
}
```

## 🐛 Troubleshooting

### "Firebase not configured" warning
- Check that `firebase-config.js` has your actual Firebase credentials
- Make sure the file is loaded before the scripts that use it

### "Permission denied" error
- Check your Firestore security rules
- Make sure rules allow read/write operations

### Changes not syncing
- Check browser console for errors
- Verify Firebase config is correct
- Make sure Firestore is enabled in Firebase Console

### Still using localStorage?
- The code falls back to localStorage if Firebase isn't configured
- This ensures the site still works, but updates won't sync across users

## 📚 Additional Resources

- [Firebase Documentation](https://firebase.google.com/docs)
- [Firestore Documentation](https://firebase.google.com/docs/firestore)
- [Firebase Console](https://console.firebase.google.com/)

## 💡 How It Works

1. When you save lenses in `upload.html`, data is saved to **Firestore** (cloud database)
2. When users visit `index.html`, it loads lenses from **Firestore**
3. The page also **listens for real-time updates**, so changes appear automatically
4. `localStorage` is used as a backup/cache

---

**Need Help?** Check the browser console (F12) for error messages that can help diagnose issues.

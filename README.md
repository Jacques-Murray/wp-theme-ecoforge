# EcoForge WordPress Theme

This is a production-ready WordPress theme built from your static HTML designs. It uses Tailwind CSS for styling and has a modern, modular file structure.

## Theme Setup

This theme uses a Node.js-based workflow to compile CSS.

### Requirements

- Node.js and npm
- A local WordPress installation

### Installation

1. Place the `ecoforge` theme folder into your WordPress themes directory (`wp-content/themes/`).
2. Navigate to the theme directory in your terminal:

```bash
cd path/to/wp-content/themes/ecoforge
```

3. Install the necessary Node.js dependencies:

```bash
npm install
```

### Development

To start the development process, run the following command. This will watch for changes in your PHP and CSS files and automatically recompile your stylesheet.

```bash
npm run dev
```

### Production Build

Before deploying your theme to a live server, create an optimized, minified stylesheet with this command:

```bash
npm run build
```

This will purge unused CSS classes to significantly reduce the final file size.

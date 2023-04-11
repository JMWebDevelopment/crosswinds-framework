/* eslint-env es6 */
'use strict';

/**
 * External dependencies
 */
export const gulpPlugins = require( 'gulp-load-plugins' )();
import path from 'path';

/**
 * Internal dependencies
 */
import {
	getThemeConfig,
	configValueDefined,
} from './utils';

// Root path is where npm run commands happen
export const rootPath = process.cwd();

export const gulpPath = `${ rootPath }/gulp`;

export const gulpTestPath = `${ rootPath }/gulp/tests`;

// Dev or production
export const isProd = ( process.env.NODE_ENV === 'production' );

// get the config
const config = getThemeConfig();

// directory for the production theme
export const prodThemePath = path.normalize( `${ rootPath }/../${ config.theme.slug }` );

// directory for assets (CSS, JS, images)
export const assetsDir = `${ rootPath }/assets`;

// directory for assets (CSS, JS, images) in production
export const prodAssetsDir = `${ prodThemePath }/assets`;

// PHPCS options
export const PHPCSOptions = {
	bin: `${ rootPath }/vendor/bin/phpcs`,
	standard: `${ rootPath }/phpcs.xml.dist`,
	warningSeverity: 0,
};

// Theme config name fields and their defaults
export const nameFieldDefaults = {
	author: 'Jacob Martella Web Development',
	PHPNamespace: 'JM_Web_Development\\JM_Web_Dev_FSE_Starter_Theme',
	slug: 'jm-web-dev-fse-starter-theme',
	name: 'JM Web Development FSE Starter Theme',
	underscoreCase: 'jm_web_dev_fse_starter_theme',
	constant: 'JM_WEB_DEV_FSE_STARTER_THEME',
	camelCase: 'JmWebDevFseStarterTheme',
	camelCaseVar: 'jmWebDevFseStarterTheme',
};

// Project paths
const paths = {
	assetsDir,
	browserSync: {
		dir: `${ rootPath }/BrowserSync`,
		cert: `${ rootPath }/BrowserSync/wp-rig-browser-sync-cert.crt`,
		caCert: `${ rootPath }/BrowserSync/wp-rig-browser-sync-root-cert.crt`,
		key: `${ rootPath }/BrowserSync/wp-rig-browser-sync-key.key`,
	},
	config: {
		themeConfig: `${ rootPath }/config/themeConfig.js`,
	},
	php: {
		src: [
			`${ rootPath }/**/*.php`,
			`!${ rootPath }/optional/**/*.*`,
			`!${ rootPath }/tests/**/*.*`,
			`!${ rootPath }/vendor/**/*.*`,
		],
		dest: `${ rootPath }/`,
	},
	html: {
		src: [
			`${ rootPath }/**/*.html`,
			`!${ rootPath }/optional/**/*.html`,
			`!${ rootPath }/tests/**/*.html`,
			`!${ rootPath }/vendor/**/*.html`,
			`!${ rootPath }/node_modules/**/*.html`,
		],
		dest: `${ rootPath }/`,
	},
	themeJSON: {
		src: [
			`${ rootPath }/theme.json`,
		],
		dest: `${ rootPath }/`,
	},
	styleJSON: {
		src: [
			`${ rootPath }/styles/*.json`,
		],
		dest: `${ rootPath }/styles`,
	},
	styles: {
		editorSrc: [
			`${ assetsDir }/css/src/editor/**/*.css`,
			// Ignore partial files.
			`!${ assetsDir }/css/src/**/_*.css`,
		],
		editorSrcDir: `${ assetsDir }/css/src/editor`,
		editorDest: `${ assetsDir }/css/editor`,
		src: [
			`${ assetsDir }/css/src/**/*.css`,
			`${ assetsDir }/css/src/sports-bench/*.css`,
			// Ignore partial files.
			`!${ assetsDir }/css/src/**/_*.css`,
			// Ignore editor source css.
			`!${ assetsDir }/css/src/editor/**/*.css`,
		],
		srcDir: `${ assetsDir }/css/src`,
		dest: `${ assetsDir }/css`,
	},
	scripts: {
		src: [
			`${ assetsDir }/js/src/**/*.js`,
			// Ignore partial files.
			`!${ assetsDir }/js/src/**/_*.js`,
		],
		srcDir: `${ assetsDir }/js/src`,
		dest: `${ assetsDir }/js`,
	},
	images: {
		src: `${ assetsDir }/images/src/**/*.{jpg,JPG,png,svg,gif,GIF}`,
		dest: `${ assetsDir }/images/`,
	},
	export: {
		src: [],
		stringReplaceSrc: [
			`${ rootPath }/style.css`,
			`${ rootPath }/languages/*.po`,
		],
	},
	languages: {
		src: [
			`${ rootPath }/**/*.php`,
			`!${ rootPath }/optional/**/*.*`,
			`!${ rootPath }/tests/**/*.*`,
			`!${ rootPath }/vendor/**/*.*`,
		],
		dest: `${ rootPath }/languages/${ nameFieldDefaults.slug }.pot`,
	},
	blocks: {
		src: [
			`${ rootPath }/inc/blocks/**/build/*.{js,json,css}`,
			`!${ rootPath }/inc/blocks/**/src/**/*.*`,
			`!${ rootPath }/inc/blocks/**/node_modules/**/*.*`,
		],
		dest: `${ rootPath }/inc/blocks/`,
	},
	webfonts: {
		src: `${ assetsDir }/webfonts/**/*.{eot,svg,ttf,woff,woff2}`,
		dest: `${ assetsDir }/webfonts/`,
	},
};

// Add rootPath to filesToCopy and additionalFilesToCopy
/* eslint no-unused-vars: 0 */
const additionalFilesToCopy = configValueDefined( 'export.additionalFilesToCopy' ) ? config.export.additionalFilesToCopy : [];
const filesToCopy = configValueDefined( 'export.filesToCopy' ) ? config.export.filesToCopy : [];
for ( const filePath of filesToCopy.concat( additionalFilesToCopy ) ) {
	// Add the files to export src
	paths.export.src.push( `${ rootPath }/${ filePath }` );
}

// Override paths for production
if ( isProd ) {
	paths.php.dest = `${ prodThemePath }/`;
	paths.html.dest = `${ prodThemePath }/`;
	paths.themeJSON.dest = `${ prodThemePath }/`;
	paths.styleJSON.dest = `${ prodThemePath }/styles/`;
	paths.styles.dest = `${ prodAssetsDir }/css/`;
	paths.styles.editorDest = `${ prodAssetsDir }/css/editor/`;
	paths.scripts.dest = `${ prodAssetsDir }/js/`;
	paths.images.dest = `${ prodAssetsDir }/images/`;
	paths.webfonts.dest = `${ prodAssetsDir }/webfonts/`;
	paths.blocks.dest = `${ prodThemePath }/inc/blocks/`;
	paths.languages = {
		src: `${ prodThemePath }/**/*.php`,
		dest: `${ prodThemePath }/languages/${ config.theme.slug }.pot`,
	};
}

export { paths };

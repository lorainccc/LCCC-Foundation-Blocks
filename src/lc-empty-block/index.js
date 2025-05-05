/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` keyword are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './style.scss';

/**
 * Internal dependencies
 */
import Edit from './edit';
import save from './save';
import metadata from './block.json';

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */

const contentIcon = (
	<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M24.64,19.96v1.29h-4.12v-1.29h3.01V1.25h-2.96V0h4v19.96h.07ZM0,19.96v1.29s.07,0,.07,0h1.05s3.01,0,3.01,0v-1.29s-3.01,0-3.01,0V1.25h2.96s0-1.25,0-1.25H1.11s-1.05,0-1.05,0v1.25s0,18.71,0,18.71H0Z" fill="#231f20"/></svg>
);

registerBlockType( metadata.name, {
	/**
	 * @see ./edit.js
	 */
	icon: contentIcon,
	edit: Edit,

	/**
	 * @see ./save.js
	 */
	save,
} );

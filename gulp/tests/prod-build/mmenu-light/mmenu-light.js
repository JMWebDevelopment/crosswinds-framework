/* eslint-disable */
! ( function( t ) {
	const e = {}; function s( n ) {
		if ( e[ n ] ) {
			return e[ n ].exports;
		} const o = e[ n ] = { i: n, l: ! 1, exports: {} }; return t[ n ].call( o.exports, o, o.exports, s ), o.l = ! 0, o.exports;
	}s.m = t, s.c = e, s.d = function( t, e, n ) {
		s.o( t, e ) || Object.defineProperty( t, e, { enumerable: ! 0, get: n } );
	}, s.r = function( t ) {
		'undefined' !== typeof Symbol && Symbol.toStringTag && Object.defineProperty( t, Symbol.toStringTag, { value: 'Module' } ), Object.defineProperty( t, '__esModule', { value: ! 0 } );
	}, s.t = function( t, e ) {
		if ( 1 & e && ( t = s( t ) ), 8 & e ) {
			return t;
		} if ( 4 & e && 'object' === typeof t && t && t.__esModule ) {
			return t;
		} const n = Object.create( null ); if ( s.r( n ), Object.defineProperty( n, 'default', { enumerable: ! 0, value: t } ), 2 & e && 'string' !== typeof t ) {
			for ( const o in t ) {
				s.d( n, o, function( e ) {
					return t[ e ];
				}.bind( null, o ) );
			}
		} return n;
	}, s.n = function( t ) {
		const e = t && t.__esModule ? function() {
			return t.default;
		} : function() {
			return t;
		}; return s.d( e, 'a', e ), e;
	}, s.o = function( t, e ) {
		return Object.prototype.hasOwnProperty.call( t, e );
	}, s.p = '', s( s.s = 0 );
}( [ function( t, e, s ) {
	'use strict'; s.r( e ); class n {
		constructor( t ) {
			this.listener = ( t ) => {
				( t.matches ? this.matchFns : this.unmatchFns ).forEach( ( t ) => {
					t();
				} );
			}, this.toggler = window.matchMedia( t ), this.toggler.addListener( this.listener ), this.matchFns = [], this.unmatchFns = [];
		}destroy() {
			this.toggler.removeListener( this.listener ), this.unmatchFns.forEach( ( t ) => {
				t();
			} ), this.matchFns = [], this.unmatchFns = [];
		}add( t, e ) {
			this.matchFns.push( t ), this.unmatchFns.push( e ), ( this.toggler.matches ? t : e )();
		}
	} const o = ( t ) => Array.prototype.slice.call( t ),
		i = ( t, e ) => o( ( e || document ).querySelectorAll( t ) ); class a {
		constructor( t, e ) {
			this.options = Object.assign( a.options, e ), this.menu = t, 'dark' == this.options.theme && this.menu.classList.add( 'mm--dark' ), this._openPanel(), this._initAnchors();
		}enable( t = 'all' ) {
			return this.toggler = new n( t ), this.toggler.add( () => this.menu.classList.add( 'mm' ), () => this.menu.classList.remove( 'mm' ) ), this.toggler;
		}disable() {
			this.toggler.destroy();
		}_openPanel() {
			let t = i( '.' + this.options.selected, this.menu ),
				e = t[ t.length - 1 ],
				s = null; e && ( s = e.closest( 'ul' ) ), s || ( s = this.menu.querySelector( 'ul' ) ), this.openPanel( s );
		}openPanel( t ) {
			let e = t.dataset.mmTitle,
				s = t.parentElement; s === this.menu ? this.menu.classList.add( 'mm--main' ) : ( this.menu.classList.remove( 'mm--main' ), e || o( s.children ).forEach( ( t ) => {
				t.matches( 'a, span' ) && ( e = t.textContent );
			} ) ), e || ( e = this.options.title ), this.menu.dataset.mmTitle = e, i( '.mm--open', this.menu ).forEach( ( t ) => {
				t.classList.remove( 'mm--open', 'mm--parent' );
			} ), t.classList.add( 'mm--open' ), t.classList.remove( 'mm--parent' ); let n = t.parentElement.closest( 'ul' ); for ( ;n; ) {
				n.classList.add( 'mm--open', 'mm--parent' ), n = n.parentElement.closest( 'ul' );
			}
		}_initAnchors() {
			const t = ( t ) => {
					const e = t.target; let s; return !! ( s = e.closest( 'span' ) ? e.parentElement : !! e.closest( 'li' ) && e ) && ( o( s.children ).forEach( ( t ) => {
						t.matches( 'ul' ) && this.openPanel( t );
					} ), t.stopImmediatePropagation(), ! 0 );
				},
				e = ( t ) => {
					const e = t.target; if ( e.matches( '.mm' ) ) {
						const s = i( '.mm--open', e ),
							n = s[ s.length - 1 ]; if ( n ) {
							const t = n.parentElement.closest( 'ul' ); t && this.openPanel( t );
						} return t.stopImmediatePropagation(), ! 0;
					} return ! 1;
				}; this.menu.addEventListener( 'click', ( s ) => {
				if ( ! this.menu.matches( '.mm' ) ) {
					return;
				} let n = ! 1; n = ( n = ( n = n || ( ( t ) => {
					return !! t.target.matches( 'a' ) && ( t.stopImmediatePropagation(), ! 0 );
				} )( s ) ) || t( s ) ) || e( s );
			} );
		}
	}a.version = '2.1.1', a.options = { title: 'Menu', theme: 'light', selected: 'Selected' }, a.optionsOffcanvas = { blockPage: ! 0, move: ! 0, position: 'left' }; const m = 'ontouchstart' in window || !! navigator.msMaxTouchPoints || ! 1; a.prototype.open = function() {
		this.menu.matches( '.mm' ) && ( this.menu.classList.add( 'mm--open' ), document.body.classList.add( 'mm-body--open' ), this.blocker && this.blocker.classList.add( 'mm--open' ), this.menu.dispatchEvent( new Event( 'mm:open' ) ) );
	}, a.prototype.close = function() {
		this.menu.classList.remove( 'mm--open' ), document.body.classList.remove( 'mm-body--open' ), this.blocker && this.blocker.classList.remove( 'mm--open' ), this.menu.dispatchEvent( new Event( 'mm:close' ) );
	};
	/*!
 * mmenujs.com/mmenu-light
 *
 * Copyright (c) Fred Heusschen
 * www.frebsite.nl
 *
 * License: CC-BY-4.0
 * http://creativecommons.org/licenses/by/4.0/
 */
	a.prototype.offcanvas = function( t ) {
		if ( t = Object.assign( a.optionsOffcanvas, t ), this.menu.classList.add( 'mm--offcanvas' ), this.toggler.add( () => {}, () => {
			this.close();
		} ), 'right' == t.position && this.menu.classList.add( 'mm--right' ), t.move ) {
			let t; this.toggler.add( () => {
				t = document.createComment( 'original menu location' ), this.menu.after( t ), document.body.append( this.menu );
			}, () => {
				t && t.replaceWith( this.menu );
			} );
		}t.blockPage && ( this.blocker = document.createElement( 'div' ), this.blocker.classList.add( 'mm-blocker' ), 'right' == t.position && this.blocker.classList.add( 'mm--right' ), document.body.append( this.blocker ), 'modal' != t.blockPage && function() {
			this.blocker.addEventListener( m ? 'touchstart' : 'mousedown', ( t ) => !! this.menu.matches( '.mm' ) && !! this.menu.matches( '.mm--open' ) && ( this.close(), t.preventDefault(), t.stopImmediatePropagation(), ! 0 ) );
		}.call( this ), this.toggler.add( () => {
			this.blocker.classList.remove( 'mm-hidden' );
		}, () => {
			this.blocker.classList.add( 'mm-hidden' );
		} ) );
	}; e.default = a; window.MmenuLight = a;
} ] ) );

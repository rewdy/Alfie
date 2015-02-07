/**
 * Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
 
CKEDITOR.stylesSet.add('default', [

  /* Block Styles */
  { 
    name: 'Attention Text',  
    element: 'p', 
    attributes: { 'class': 'attn' } 
  },
  {
    name: 'Box',
    element: 'div',
    attributes: { 'class': 'box' }
  },
  {
    name: 'Message: Status',
    element: 'div',
    attributes: { 'class': 'status' }
  },
  {
    name: 'Message: Warning',
    element: 'div',
    attributes: { 'class': 'warning' }
  },
  {
    name: 'Message: Error',
    element: 'div',
    attributes: { 'class': 'error' }
  },

  /* Inline Styles */
  { 
    name: 'Marker',
    element: 'span', 
    attributes: { 'class': 'marker' } 
  },

  /* Object Styles */
  {
    name: 'Image aligned left',
    element: 'img',
    attributes: { 'class': 'left' }
  },

  {
    name: 'Image aligned right',
    element: 'img',
    attributes: { 'class': 'right' }
  },

  {
    name: 'Compact table',
    element: 'table',
    attributes: { 'class': 'narrow' }
  },

  { 
    name: 'Lined List',  
    element: 'ul',
    attributes: { 'class': 'lined' } 
  },

  { 
    name: 'Lined List',  
    element: 'ol',
    attributes: { 'class': 'lined' } 
  },
  
  { 
    name: 'Blocked List',
    element: 'ul',
    attributes: { 'class': 'blocked' } 
  },
  
  { 
    name: 'Blocked List',
    element: 'ol',
    attributes: { 'class': 'blocked' } 
  },

  { 
    name: 'Inline List',
    element: 'ul',
    attributes: { 'class': 'inline' } 
  },
  
  { 
    name: 'Inline List',
    element: 'ol',
    attributes: { 'class': 'inline' } 
  }
] );

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tags
  -->
  <title>JAP - Perosonal Blog Page</title>
  <meta name="title" content="JAP - Perosonal Blog PAGE">
  <meta name="description" content="This is the official blog page of JAP SCHOLARSHIP">
  

  <!--
    - favicon
  -->

  <style>
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * COLORS
 */

/** Background colors */
--bg-wild-blue-yonder: hsla(216, 33%, 68%, 1);
--bg-carolina-blue: hsla(199, 89%, 49%, 1);
--bg-prussian-blue: hsla(216, 33%, 20%, 1);
--bg-oxford-blue: hsla(222, 44%, 13%, 1);
--bg-oxford-blue-2: hsla(222, 47%, 11%, 1);

/** Text colors */
--text-white: hsla(0, 0%, 100%, 1);
--text-alice-blue: hsla(216, 100%, 95%, 1);
--text-columbia-blue: hsla(199, 69%, 84%, 1);
--text-wild-blue-yonder: hsla(216, 33%, 68%, 1);
--text-carolina-blue: hsla(199, 89%, 49%, 1);
--text-shadow-blue: hsla(217, 24%, 59%, 1);
--text-slate-gray: hsla(217, 17%, 48%, 1);

/** Gradient colors */
--gradient-1: linear-gradient(90deg, #0ea5ea, #0bd1d1 51%);
--gradient-2: linear-gradient(90deg, #0ea5ea, #0bd1d1 51%, #0ea5ea);
--gradient-3: linear-gradient(0deg, #000d1a, transparent);

/** Border colors */
--border-wild-blue-yonder: hsla(216, 33%, 68%, 1);
--border-prussian-blue: hsla(216, 33%, 20%, 1);
--border-white: hsl(0, 0%, 100%);
--border-white-alpha-15: hsla(0, 0%, 100%, 0.15);

/** Default colors */
--white: hsl(0, 0%, 100%, 1);
--black: hsl(0, 0%, 0%, 1);

/**
 * TYPOGRAPHY
 */

/** Font family */
--fontFamily-noto_sans: 'Noto Sans', sans-serif;

/** Font size */
--fontSize-1: 2.9rem;
--fontSize-2: 2.0rem;
--fontSize-3: 1.8rem;
--fontSize-4: 1.6rem;
--fontSize-5: 1.5rem;
--fontSize-6: 1.4rem;
--fontSize-7: 1.2rem;
--fontSize-8: 1.3rem;

/** Font weight */
--weight-medium: 500;
--weight-semiBold: 600;
--weight-bold: 700;
--weight-extraBold: 800;

/** Line height */
--lineHeight-1: 1.3;
--lineHeight-2: 1.5;
--lineHeight-4: 1.5;

/**
 * BOX SHADOW
 */

--shadow-1: 0 8px 20px 0 hsla(0, 0%, 0%, 0.05);
--shadow-2: 0px 3px 20px hsla(180, 90%, 43%, 0.2);

/**
 * BORDER RADIUS
 */

--radius-6: 6px;
--radius-8: 8px;
--radius-16: 16px;
--radius-48: 48px;
--radius-circle: 50%;
--radius-pill: 200px;

/**
 * SPACING
 */

--section-padding: 70px;

/**
 * TRANSITION
 */

--transition-1: 0.25s ease;
--transition-2: 0.5s ease;
--cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
--cubic-out: cubic-bezier(0.05, 0.83, 0.52, 0.97);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
input,
button,
ion-icon { display: block; }

a {
color: inherit;
text-decoration: none;
}

img { height: auto; }

input,
button {
background: none;
border: none;
font: inherit;
color: inherit;
}

input {
width: 100%;
outline: none;
}

button { cursor: pointer; }

ion-icon { pointer-events: none; }

address { font-style: normal; }

html {
font-size: 10px;
scroll-behavior: smooth;
}

body {
background-color: white;
color:black;
font-family: var(--fontFamily-noto_sans);
font-size: 1.6rem;
line-height: var(--lineHeight-4);
overflow-y: overlay;
}

body.nav-active { overflow: hidden; }

::-webkit-scrollbar { width: 5px; }

::-webkit-scrollbar-track { background-color: transparent; }

::-webkit-scrollbar-thumb {
background-color: var(--bg-carolina-blue);
border-radius: var(--radius-pill);
}





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 16px; }

.hover-1,
.hover-2 { transition: var(--transition-1); }

.hover-1:is(:hover, :focus-visible) {
color: var(--text-wild-blue-yonder);
transform: translateX(3px);
}

.hover-2:is(:hover, :focus-visible) { color: var(--text-carolina-blue); }

.profile-card {
display: flex;
align-items: center;
gap: 10px;
}

.profile-card .profile-banner { border-radius: var(--radius-circle); }

.headline {
color: var(--text-columbia-blue);
line-height: var(--lineHeight-1);
}

.headline-1 {
font-size: var(--fontSize-1);
color: var(--text-alice-blue);
font-weight: var(--weight-extraBold);
}

.headline-2 { font-size: var(--fontSize-2); }

.headline-3 {
font-size: var(--fontSize-2);
line-height: var(--lineHeight-2);
}

.section-title { margin-block-end: 10px; }

.headline .span {
background-image: var(--gradient-1);
display: inline-block;
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;
}

.btn {
background-image: var(--gradient-2);
background-size: 200%;
background-position: left;
color: var(--white);
font-size: var(--fontSize-6);
font-weight: var(--weight-bold);
max-width: max-content;
display: flex;
align-items: center;
gap: 3px;
transition: var(--transition-1);
}

.btn:is(:hover, :focus-visible) { background-position: right; }

.btn-primary {
padding: 8px 16px;
border-radius: var(--radius-6);
}

.btn-secondary {
padding: 18px 30px;
border-radius: var(--radius-pill);
}

.w-100 { width: 100%; }

.card {
background-color: var(--bg-oxford-blue);
border: 1px solid var(--border-prussian-blue);
}

.img-holder {
aspect-ratio: var(--width) / var(--height);
background-color: var(--bg-prussian-blue);
overflow: hidden;
}

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}

.section { padding-block: var(--section-padding); }

.section-text {
font-size: var(--fontSize-3);
margin-block-end: 70px;
}

.grid-list {
display: grid;
gap: 30px;
}

.card-wrapper {
display: flex;
justify-content: space-between;
gap: 20px;
align-items: center;
font-size: var(--fontSize-6);
margin-block: 20px;
}

.card-wrapper :is(.card-tag, .wrapper) {
display: flex;
gap: 3px;
align-items: center;
}





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header .btn { display: none; }

.header {
position: fixed;
top: 0;
left: 0;
width: 100%;
padding-block: 24px;
z-index: 4;
}

.header.active {
padding-block: 8px;
box-shadow: var(--shadow-1);
border-block-end: 1px solid var(--bg-prussian-blue);
animation: slideIn 0.5s ease forwards;
}

@keyframes slideIn {
0% { transform: translateY(-100%); }
100% { transform: translateY(0); }
}

.header .container {
display: flex;
justify-content: space-between;
align-items: center;
gap: 10px;
}

.nav-open-btn,
.nav-close-btn {
color: var(--text-wild-blue-yonder);
font-size: 3.5rem;
}

.navbar {
position: absolute;
top: 0;
right: -340px;
max-width: 340px;
width: 100%;
height: 100vh;
background-color: var(--bg-oxford-blue-2);
padding: 30px;
z-index: 2;
overflow-y: auto;
visibility: hidden;
transition: 0.25s var(--cubic-in);
}

.navbar.active {
transform: translateX(-340px);
visibility: visible;
transition: 0.5s var(--cubic-out);
}

.navbar-top {
display: flex;
justify-content: space-between;
align-items: center;
padding-block-end: 15px;
margin-block-end: 15px;
border-block-end: 1px solid var(--border-prussian-blue);
}

.navbar-list { border-block-end: 1px solid var(--border-white-alpha-15); }

.navbar-link {
color: var(--text-alice-blue);
font-weight: var(--weight-medium);
padding-block: 10px;
}

.navbar-bottom {
padding-block: 30px 20px;
margin-block: 20px 25px;
border-block: 1px solid var(--border-prussian-blue);
}

.navbar .profile-card { margin-block-end: 15px; }

.navbar .profile-card .card-title {
color: var(--text-columbia-blue);
font-size: var(--fontSize-6);
font-weight: var(--weight-semiBold);
}

.navbar .profile-card .card-subtitle { font-size: var(--fontSize-7); }

.navbar .link-list {
columns: 2;
-webkit-columns: 2;
}

.navbar-bottom-link {
color: var(--text-alice-blue);
font-size: var(--fontSize-6);
padding-block: 6px;
}

.copyright-text {
color: var(--text-alice-blue);
font-size: var(--fontSize-8);
}





/*-----------------------------------*\
#HERO
\*-----------------------------------*/

.hero-bg { display: none; }

.hero { padding-block-start: calc(var(--section-padding) + 160px); }

.hero .container {
display: grid;
gap: 50px;
}

.hero-subtitle {
font-size: var(--fontSize-6);
font-weight: var(--weight-bold);
}

.hero .section-title { margin-block: 20px; }

.hero .hero-text { margin-block-end: 40px; }

.hero .input-wrapper:hover { box-shadow: var(--shadow-2); }

.hero .input-wrapper {
position: relative;
padding: 10px;
padding-inline-start: 20px;
background-color: var(--bg-prussian-blue);
border-radius: var(--radius-6);
border: 1px solid var(--bg-carolina-blue);
display: flex;
justify-items: flex-end;
transition: var(--transition-1);
}

.hero .input-field { padding-inline-end: 5px; }

.hero-banner { position: relative; }

.hero-banner .w-100 {
max-width: max-content;
margin-inline: auto;
}

.hero .shape {
position: absolute;
z-index: -1;

animation: heroDecoAnim 3s linear infinite alternate;
}

@keyframes heroDecoAnim {
0% { transform: translateY(40px) rotate(0); }
100% { transform: translateY(0) rotate(0.4turn); }
}

.hero .shape-1 {
top: 50px;
right: 40px;
}

.hero .shape-2 {
bottom: 20px;
left: 24px;
}





/*-----------------------------------*\
#TOPICS
\*-----------------------------------*/

.topic-card {
padding: 24px;
border-radius: var(--radius-8);
}

.topic-card .card-content { margin-block-end: 15px; }

.topic-card .card-text {
color: var(--text-wild-blue-yonder);
font-size: var(--fontSize-6);
margin-block: 15px 20px;
}

.btn-group {
display: flex;
align-items: center;
gap: 10px;
}

.btn-icon {
width: 32px;
height: 32px;
display: grid;
place-items: center;
background: var(--bg-prussian-blue);
border-radius: var(--radius-circle);
color: var(--white);
}

.btn-icon:is(:hover, :focus-visible) { background: var(--gradient-1); }

.slider {
--slider-items: 1;
overflow: hidden;
}

.slider-list {
position: relative;
display: flex;
align-items: center;
gap: 20px;
transition: transform var(--transition-2);
}

.slider-item { min-width: 100%; }

.slider-card { position: relative; }

.slider-card::before {
content: "";
position: absolute;
bottom: 0;
left: 0;
width: 100%;
height: 50%;
background-image: var(--gradient-3);
border-radius: var(--radius-8);
}

.slider-list .slider-banner { border-radius: var(--radius-8); }

.slider-content {
position: absolute;
bottom: 15px;
left: 15px;
}

.slider-title {
color: var(--text-columbia-blue);
font-weight: var(--weight-bold);
margin-block-end: 5px;
transition: var(--transition-1);
}

.slider-card:is(:hover, :focus-visible) .slider-title { color: var(--text-carolina-blue); }

.slider-subtitle { font-size: var(--fontSize-7); }





/*-----------------------------------*\
#FEATURED
\*-----------------------------------*/

.feature-bg { display: none; }

.feature-list {
display: flex;
flex-wrap: wrap;
gap: 30px;
}

.feature-card {
padding: 20px;
border-radius: var(--radius-16);
transition: var(--transition-1);
}

.feature-card:is(:hover, :focus-within) { transform: translateY(-5px); }

.feature-card .card-banner { border-radius: var(--radius-16); }

.feature-card .card-wrapper { margin-block-start: 24px; }

.feature .profile-card :is(.card-title, .card-subtitle) { color: var(--text-slate-gray); }

.feature .profile-card .card-title { font-weight: var(--weight-bold); }

.feature .profile-card .card-subtitle,
.feature .card-wrapper .card-btn { font-size: var(--fontSize-6); }

.feature-card .card-wrapper:last-child {
font-size: var(--fontSize-4);
margin-block-end: 0;
}

.feature .card-wrapper .card-btn {
position: relative;
color: var(--text-wild-blue-yonder);
z-index: 1;
}

.feature .card-wrapper .card-btn::before {
content: "";
position: absolute;
top: -13px;
left: -20px;
width: 48px;
height: 48px;
background-color: var(--bg-oxford-blue-2);
border-radius: var(--radius-circle);
z-index: -1;
}

.feature .btn {
margin-inline: auto;
margin-block-start: 30px;
}





/*-----------------------------------*\
#POPULAR TAGS
\*-----------------------------------*/

.tags .grid-list { grid-template-columns: repeat(auto-fit, minmax(125px, 1fr)); }

.tag-btn {
width: 100%;
display: flex;
align-items: center;
gap: 8px;
padding: 18px;
border-radius: var(--radius-16);
}

.tag-btn:is(:hover, :focus-visible) {
box-shadow: var(--shadow-2);
background-image: linear-gradient(var(--bg-oxford-blue), var(--bg-oxford-blue)), var(--gradient-1);
background-clip: padding-box, border-box;
border-color: transparent;
transform: translateY(-2px);
transition: var(--transition-1);
}

.tag-btn img {
width: 100%;
max-width: 32px;
}





/*-----------------------------------*\
#RECENT POST
\*-----------------------------------*/

.recent-post .container {
display: grid;
gap: 50px;
}

.recent-post-card {
display: grid;
gap: 30px;
}

.recent-post-card .card-banner {
border-radius: var(--radius-16);
transition: var(--transition-1);
}

.recent-post-card:is(:hover, :focus-within) .card-banner {
transform: translateY(-2px);
}

.recent-post-card .card-text {
color: var(--text-wild-blue-yonder);
font-size: var(--fontSize-6);
line-height: var(--lineHeight-1);
}

.recent-post-card .card-badge {
background-color: var(--bg-prussian-blue);
max-width: max-content;
color: var(--text-white);
font-size: var(--fontSize-8);
font-weight: var(--weight-bold);
padding: 4px 15px;
border-radius: var(--radius-pill);
transition: var(--transition-1);
}

.recent-post-card .card-badge:is(:hover, :focus-visible),
.pagination-btn:is(:hover, :focus-visible) {
transform: translateY(-2px);
background-color: var(--bg-carolina-blue);
}

.recent-post-card .card-title { margin-block: 15px 20px; }

.recent-post-card .card-tag {
gap: 15px;
color: var(--text-slate-gray);
}

.recent-post-card .card-wrapper ion-icon {
font-size: 1.8rem;
--ionicon-stroke-width: 40px;
}

.pagination-btn {
background-color: var(--bg-prussian-blue);
color: var(--text-white);
font-weight: var(--weight-bold);
line-height: 1;
width: 35px;
height: 35px;
display: grid;
place-items: center;
border-radius: var(--radius-circle);
transition: var(--transition-1);
}

.pagination {
display: flex;
justify-content: flex-start;
align-items: center;
gap: 5px;
margin-block-start: 60px;
}

.aside-card {
padding: 25px;
border-radius: var(--radius-16);
}

.aside-title { margin-block-end: 40px; }

.aside-title .span { position: relative; }

.aside-title .span::after {
content: "";
display: block;
width: 96px;
height: 3px;
background-color: var(--bg-carolina-blue);
margin-block-start: 10px;
}

.popular-card {
display: flex;
align-items: flex-start;
gap: 10px;
margin-block-start: 20px;
}

.popular-card .card-banner {
width: 54px;
flex-shrink: 0;
border-radius: var(--radius-circle);
}

.popular-list > li:not(:last-child) .card-content {
border-block-end: 1px solid var(--border-prussian-blue);
}

.popular-card .warpper {
display: flex;
flex-wrap: wrap;
align-items: center;
column-gap: 10px;
font-size: var(--fontSize-6);
color: var(--text-slate-gray);
margin-block: 12px 20px;
}

.comment-list > li:not(:last-child) .comment-card {
padding-block-end: 22px;
border-block-end: 1px solid var(--border-prussian-blue);
margin-block-end: 22px;
}

.comment-card .card-text {
color: var(--text-wild-blue-yonder);
font-size: var(--fontSize-6);
line-height: var(--lineHeight-1);
margin-block-end: 20px;
}

.comment-card .profile-card {
color: var(--text-slate-gray);
font-size: var(--fontSize-6);
}

.comment-card .card-date { font-size: var(--fontSize-7); }

.insta-card .card-text {
color: var(--text-slate-gray);
font-weight: var(--weight-bold);
margin-block: 5px 30px;
}

.insta-list {
display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 24px;
}

.insta-post { border-radius: var(--radius-8); }





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer {
padding-inline: 20px;
border-radius: var(--radius-48);
color: var(--text-wild-blue-yonder);
margin-block-end: 24px;
}

.footer-top {
display: grid;
gap: 20px;
}

.footer-brand .footer-text { font-size: var(--fontSize-6); }

.footer-text:not(.address) { margin-block: 20px; }

.footer-brand .footer-list-title { margin-block-end: 2px; }

.footer-list-title {
color: var(--text-columbia-blue);
font-size: var(--fontSize-3);
margin-block-end: 30px;
}

.footer-list ul { columns: 2; }

.footer-link { margin-block-end: 12px; }

.footer .input-wrapper {
position: relative;
margin-block-end: 24px;
}

.footer .input-field {
padding: 12px;
padding-inline-start: 20px;
border-block-end: 1px solid var(--text-wild-blue-yonder);
font-size: var(--fontSize-6);
}

.footer .input-field::-webkit-input-placeholder {
color: inherit;
opacity: 0.5;
}

.footer .input-wrapper ion-icon {
position: absolute;
top: 50%;
left: 0;
transform: translateY(-50%);
--ionicon-stroke-width: 40px;
}

.footer-bottom {
border-block-start: 1px solid var(--border-prussian-blue);
padding-block: 50px;
}

.copyright {
text-align: center;
margin-block-end: 15px;
}

.copyright-link {
display: inline-block;
color: var(--text-carolina-blue);
font-style: italic;
}

.social-list {
display: flex;
flex-wrap: wrap;
justify-content: center;
gap: 15px;
}

.social-link {
display: flex;
align-items: center;
gap: 8px;
transition: var(--transition-1);
}

.social-link:is(:hover, :focus-visible) {
color: var(--text-carolina-blue);
transform: translateY(-2px);
}





/*-----------------------------------*\
#BACK TO TOP
\*-----------------------------------*/

.back-top-btn {
position: fixed;
bottom: 20px;
right: 20px;
width: 50px;
height: 50px;
background-color: var(--bg-prussian-blue);
color: var(--white);
display: grid;
place-items: center;
border-radius: var(--radius-circle);
border: 3px solid var(--bg-carolina-blue);
transition: var(--transition-1);
visibility: hidden;
opacity: 0;
z-index: 4;
}

.back-top-btn:is(:hover, :focus-visible) { box-shadow: var(--shadow-2); }

.back-top-btn.active {
visibility: visible;
opacity: 1;
transform: translateY(-10px);
}





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for large than 575px screen
*/

@media (min-width: 575px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  /* font size */
  --fontSize-1: 4.4rem;
  --fontSize-2: 3.5rem;

  /**
   * spacing
   */

  --section-padding: 100px;

}



/**
 * REUSED STYLE
 */

.container {
  max-width: 540px;
  width: 100%;
  margin-inline: auto;
}

.headline-3 { --fontSize-2: 2.4rem; }



/**
 * HEADER
 */

.header .btn {
  display: block;
  margin-inline-start: auto;
}

.header.active { padding-block: 20px; }



/**
 * HERO
 */

.hero { position: relative; }

.hero .input-wrapper { max-width: 390px; }

.hero-bg {
  display: block;
  position: absolute;
  pointer-events: none;
}

.hero-bg-1 {
  top: 80px;
  left: 0;
}

.hero-bg-2 {
  bottom: -200px;
  left: -20px;
}

.shape-2 { left: 60px; }



/**
 * TOPICS
 */

.topics .section-title { font-size: 2rem; }

.slider { --slider-items: 3; }

.slider-item { min-width: calc(33.33% - 13.33px); }



/**
 * FEATURE
 */

.feature { position: relative; }

.feature-bg {
  display: block;
  position: absolute;
  top: -100px;
  right: 0;
  pointer-events: none;
}



/**
 * RECENT POST
 */

.recent-post-card {
  grid-template-columns: 0.5fr 1fr;
  gap: 20px;
}

.pagination-btn {
  width: 42px;
  height: 42px;
}



/**
 * ASIDE
 */

.aside-title { --fontSize-2: 2rem; }

}





/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  /* font size */
  --fontSize-1: 6.4rem;
  --fontSize-2: 4.5rem;

}



/**
 * REUSED STYLE
 */

.container { max-width: 720px; }



/**
 * RECENT POST
 */

.recent-post-card { grid-template-columns: 0.7fr 1fr; }

}





/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {

/**
 * REUSED STYLE
 */

.container { max-width: 930px; }



/**
 * HERO
 */

.hero { padding-block-start: calc(var(--section-padding) + 80px); }

.hero .container {
  grid-template-columns: 1fr 1fr;
  align-items: center;
}



/**
 * TOPICS
 */

.topic-card {
  display: grid;
  grid-template-columns: 0.3fr 1fr;
  align-items: center;
  gap: 20px;
}



/**
 * FEATURE
 */

.feature-list li:nth-child(-n+2) { width: calc(50% - 15px); }

.feature-list li:nth-child(n+3) { width: calc(33.33% - 20px); }

.feature-list li:nth-child(n+3) .headline-3 { --fontSize-2: 2rem; }



/**
 * TAGS
 */

.tags .grid-list { grid-template-columns: repeat(4, 1fr); }



/**
 * RECENT POST
 */

.recent-post .container {
  grid-template-columns: 1fr 0.6fr;
  align-items: flex-start;
}



/**
 * FOOTER
 */

.footer-top { grid-template-columns: repeat(3, 1fr); }

.footer-bottom {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.copyright { margin-block-end: 0; }

}





/**
* responsive for large than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * REUSED STYLE
 */

.container { max-width: 1140px; }

body.nav-active { overflow-y: overlay; }



/**
 * HEADER
 */

.nav-open-btn,
.navbar-top,
.navbar-bottom,
.copyright-text { display: none; }

.navbar,
.navbar.active {
  all: unset;
  display: block;
}

.navbar-list {
  border-block-end: none;
  display: flex;
  gap: 20px;
  margin-inline: auto;
}

.header .btn { margin-inline-start: 0; }

.navbar-link {
  color:white;
  font-weight: unset;
}

.navbar-link:is(:hover, :focus-visible) {
  color: var(--text-carolina-blue);
  transform: translateX(0);
}



/* Target the input element and its placeholder */
input::placeholder {
    color: white; /* Set the color to white */
}

/**
 * HERO
 */

.hero .container { max-width: 1050px; }



/**
 * TAGS
 */

.tags .grid-list { grid-template-columns: repeat(6, 1fr); }



/**
 * FOOTER
 */

.footer-top {
  gap: 40px;
  padding-inline: 120px;
}

}
  </style>
 <link rel="icon" type="image/x-icon" href="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!--
    - custom css link
  -->
  
  

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 400; /* Regular */
            background:gray;
            color:white !important;

        }

        </style>
  <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body id="top">

  <!--
    - #HEADER
  -->

  <header class="header" data-header style="  background-color: #0f3057;">
    <div class="container">

      <a href="/" class="logo">
         <h3 style="color:white;">JAP Blog</h3>
      </a>

      <nav class="navbar" data-navbar >

        <div class="navbar-top">
          <a href="/" class="logo">
            <h3 style="color:white;">JAP Blog</h3>
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list" style="font-weight:600;color:white;">

          <li>
            <a href="#home" class="navbar-link hover-1" data-nav-toggler>Home</a>
          </li>

          <li>
            <a href="#topics" class="navbar-link hover-1" data-nav-toggler>Topics</a>
          </li>

          <li>
            <a href="#featured" class="navbar-link hover-1" data-nav-toggler>Featured Post</a>
          </li>

          <li>
            <a href="#recent" class="navbar-link hover-1" data-nav-toggler>Recent Post</a>
          </li>


        </ul>

        <div class="navbar-bottom">





        </div>

        <p class="copyright-text">
          Copyright 2024 © JAP - Personal Blog Page.
          Developed by JAP TECH TEAM
        </p>

      </nav>


      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!--
        - #HERO
      -->

      <section class="hero" id="home" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle" style="font-weight:600;">Hello Everyone!</p>

@if(session('success'))
<div class="alert alert-success text-center" id="successMessage">
    <i class="fas fa-check-circle mr-2"></i> <!-- Font Awesome checkmark icon -->
    {{ session('success') }}
</div>

    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    </script>
@endif

            <h1 class="headline headline-1 section-title" style="color:black;">
             Our Blog <span class="" style="color:#fff">Page</span>
            </h1>

            <p class="hero-text" style="font-weight:500;">
                Welcome to our blog, Find young visionary Africans with little means, and give them the opportunity to get a world class education that will make them valuable contributors to the African continent.
            </p>

            <div class="input-wrapper" style="margin-bottom:2rem;">
                <form action="/subscribe" method="POST">
                    @csrf


              <input type="email" style="color:white;" name="email_address" placeholder="Type your email address" required
                class="input-field" autocomplete="off">

              <button type="submit" class="btn btn-primary" style="background:#309B32;color:white;">
                <span class="" >Subscribe</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
              </button>
            </form>


            </div>

          </div>

          <div class="hero-banner">

            <img src="https://media.istockphoto.com/id/1477858506/photo/news-online-in-phone-reading-newspaper-from-website-digital-publication-and-magazine-mockup.webp?b=1&s=170667a&w=0&k=20&c=G9EGbIPr1D59b_dSdrFYKXt5pC402U_NAWFefHjk-BM=" width="327" height="490" alt="Wren Clark" class="w-100">



          </div>



        </div>
      </section>





      <!--
        - #TOPICS
      -->

      <section class="topics" id="topics" aria-labelledby="topic-label">
        <div class="container">

          <div class="card topic-card">

            <div class="card-content">

              <h2 class="headline headline-2 section-title card-title" id="topic-label">
                Hot topics
              </h2>

              <p class="card-text"  style="color:white;">
                Don't miss out on the latest news JAP Scholarship, reviews, guide...
              </p>

              <div class="btn-group">
                <button class="btn-icon" aria-label="previous" data-slider-prev>
                  <ion-icon name="arrow-back" aria-hidden="true"></ion-icon>
                </button>

                <button class="btn-icon" aria-label="next" data-slider-next>
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>
              </div>

            </div>

            <div class="slider" data-slider>
              <ul class="slider-list" data-slider-container>
                @foreach($posts as $scheme)

                <li class="slider-item">
                  <a href="/show/{{ $scheme->id }}" class="slider-card">

                    <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                        <img src="{{ asset('storage/recommendations/' . basename($scheme->image_url)) }}" width="507" height="618" alt="JAP" class="img-cover">


                    </figure>

                    <div class="slider-content">
                      <span class="slider-title" style="color:white;">{{$scheme->title }}</span>

                      <p class="slider-subtitle" style="color:white;">{{$scheme->created_at }}</p>

                    </div>

                  </a>
                </li>
      @endforeach


              </ul>
            </div>

          </div>

        </div>
      </section>





      <!--
        - #FEATURED POST
      -->

      <style>
        body {
 font-family: Arial, sans-serif;
}

form {
 max-width: 600px;
 margin: 0 auto;
 color:white;
 padding: 20px;
}

.form-group {
 margin-bottom: 15px;
}

label {
 display: block;
 margin-bottom: 5px;
}

input[type="text"],
textarea,
input[type="file"] {
 width: 100%;
 padding: 10px;
 border: 1px solid #ccc;
 border-radius: 4px;
}

textarea {
 resize: vertical;
}

input[type="submit"] {
 background-color: #4CAF50;
 color: white;
 padding: 10px 20px;
 border: none;
 border-radius: 4px;
 cursor: pointer;
}

input[type="submit"]:hover {
 background-color: #45a049;
}

@media (max-width: 600px) {
 .form-group {
    display: block;
 }
}

      </style>

      <section class="section feature" aria-label="feature" id="featured">
        <div class="container">

          <h2 class="headline headline-2 section-title" style="color:#fff ! important">
            <span class="span"  style="color:#fff! important">Editor's picked</span>
          </h2>

          <p class="section-text">
            Featured and highly rated important!
          </p>

          <ul class="feature-list">

            <li>
              <div class="card feature-card">
                <h2 style="color:white;">Write Blogs</h2>


{{--
                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;padding-bottom:1rem;"> --}}
                    <form action="/blogs/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                           <label for="name">Name:</label>
                           <input type="text" id="name" name="author" required>
                        </div>
                        <div class="form-group">
                           <label for="title">Title:</label>
                           <input type="text" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                           <label for="details">Details:</label>
                           <textarea id="details" name="details"></textarea>
                        </div>
                        <div class="form-group">
                           <label for="image">Image:</label>
                           <input type="file" id="image" name="image_url">
                        </div>
                        <input type="submit" value="Submit">
                       </form>

              

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-tag">
                      <a href="#" class="span hover-2" style="color:white;">#JAP</a>

                      <a href="#" class="span hover-2" style="color:white;">#Scholarships</a>
                    </div>

                    <div class="wrapper">
                    

                      <span class="" style="color:white;">{{ \App\Models\Post::count() }} blogs</span>
                    </div>
                  </div>



                  <div class="card-wrapper">

                    <div class="profile-card">
                      <img src="https://media.istockphoto.com/id/1496444133/photo/dynamic-wave-with-connected-dots-and-lines-digital-technology-background-concept-of-network.webp?b=1&s=170667a&w=0&k=20&c=4aR9zZbwnsM8yzFJolrnloEgDMQcx-Q637NJqqbVlZs=" width="48" height="48" loading="lazy" alt="Joseph"
                        class="profile-banner">

                    </div>



                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="card feature-card">

                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                  <img src="https://media.istockphoto.com/id/1438623716/photo/black-woman-with-laptop-reading-typing-and-working-for-online-digital-newspaper-marketing-or.webp?b=1&s=170667a&w=0&k=20&c=l6JsW73GP3gWBLPDEdYbDmp-exPW02MRWpjpEzdPjLg=" width="1602" height="903" loading="lazy"
                    alt="Self-observation is the first step of inner unfolding" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">


                    <div class="wrapper">
                    
                     
                    </div>
                  </div>

                  <h3 class="headline headline-3">
                    <a  class="card-title hover-2" style="color:white;">
                        JAP scholars benefit from mentorship programs, connecting them with experienced professionals in their chosen field."
                    </a>
                  </h3>

                  <div class="card-wrapper">

                    <div class="profile-card">
                      <img src="https://media.istockphoto.com/id/1406318320/photo/young-asian-female-freelancer-working-online-on-laptop-computer-from-home-office.webp?b=1&s=170667a&w=0&k=20&c=VBcLEX-qMUFgo_uK2CTi7qMbeluiRV3YVbGQe-X6qa4=" width="48" height="48" loading="lazy" alt="Joseph"
                        class="profile-banner">

                      <div>
                        <p class="card-title"style="color:white;" >JAP</p>

                        <p class="card-subtitle" style="color:white;">25 march 2024</p>
                      </div>
                    </div>

          

                  </div>

                </div>

              </div>
            </li>


            @foreach($posts as $scheme)


            <li>
              <div class="card feature-card">

                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                    <img src="{{ asset('storage/recommendations/' . basename($scheme->image_url)) }}" width="507" height="618" loading="lazy" alt="JAP" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-tag">
                      <a href="#" class="span hover-2" style="color:white;">Author:{{ $scheme->author }}</a>


                    </div>


                  </div>

                  <h3 class="headline headline-3">
                    <a href="/show/{{ $scheme->id }}" style="color:white;" class="card-title hover-2">
                        {{ $scheme->title }}
                    </a>
                  </h3>

                  <div class="card-wrapper">

                    <div class="profile-card">


                      <div>
                        <p class="card-title" style="color:white;">Joseph</p>

                        <p class="card-subtitle" style="color:white;">{{ $scheme->created_at }}</p>
                      </div>
                    </div>

                    <a href="/show/{{ $scheme->id }}" style="color:white;" class="card-btn">Read more</a>

                  </div>

                </div>

              </div>
            </li>

            @endforeach


          </ul>


        </div>



      </section>





      <!--
        - #POPULAR TAGS
      -->



      <!--
        - #RECENT POST
      -->

      <section class="section recent-post" id="recent" aria-labelledby="recent-label">
        <div class="container">

          <div class="post-main">

            <h2 class="headline headline-2 section-title">
              <span class="span" style="color:white;">Recent posts</span>
            </h2>

            <p class="section-text"style="color:white;">
              Don't miss the latest trends
            </p>

            <ul class="grid-list">
            @foreach($latestPosts as $scheme)


              <li>
                <div class="recent-post-card">

                  <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                    <img src="{{ asset('storage/recommendations/' . basename($scheme->image_url)) }}" width="507" height="618" loading="lazy" alt="JAP" class="img-cover">
                  </figure>

                  <div class="card-content">

                    

                    <h3 class="headline headline-3 card-title">
                      <a href="/show/{{ $scheme->id }}" class="link hover-2" style="color:white;">{{ $scheme->title }}</a>
                    </h3>

                    <p class="card-text" style="color:white;">
                        {{ implode(' ', array_slice(str_word_count($scheme->details, 1), 0, 15)) }}.....

                    </p>

                    <div class="card-wrapper">
                      <div class="card-tag">


                        <a style="color:white;" href="/show/{{ $scheme->id }}" class="span hover-2">{{ $scheme->author }}</a>
                      </div>

                      <div class="wrapper">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                        <span class="span" style="color:white;">{{ $scheme->created_at }}</span>
                      </div>
                    </div>

                  </div>

                </div>
              </li>

            @endforeach



            </ul>



          </div>

          <div class="post-aside grid-list">

            <div class="card aside-card">

              <h3 class="headline headline-2 aside-title">
                <span class="span" style="color:white;">Popular Posts</span>
              </h3>

              <ul class="popular-list">
            @foreach($popularPosts as $scheme)


                <li>
                  <div class="popular-card">

                    <figure class="card-banner img-holder" style="--width: 64; --height: 64;">
                        <img src="{{ asset('storage/recommendations/' . basename($scheme->image_url)) }}" width="507" height="618" loading="lazy" alt="JAP" class="img-cover">
                    </figure>

                    <div class="card-content">

                      <h4 class="headline headline-4 card-title">
                        <a href="#" class="link hover-2" style="color:white;">{{ $scheme->title }}</a>
                      </h4>

                      <div class="warpper">


                        <time class="publish-date" style="color:white;">{{ $scheme->created_at }}</time>
                      </div>

                    </div>

                  </div>
                </li>
                @endforeach



              </ul>

            </div>

          </div>


        </div>
      </section>

    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer>
    <div class="container">





        </div>

        <div class="footer-bottom">

          <p class="copyright">
            &copy; Developed by  <a href="#" class="copyright-link" style="font-style: normal! important;color:white;font-weight:600;"> JAP TECH TEAM.</a>
          </p>

          <ul class="social-list" style="color:white;">
              

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>

                <span class="span">Twitter</span>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>

                <span class="span">LinkedIn</span>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>

                <span class="span">Instagram</span>
              </a>
            </li>

          </ul>

        </div>

      </div>

    </div>
  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!--
    - custom js link
  -->
  <script>

'use strict';



/**
 * Add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * MOBILE NAVBAR TOGGLER
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");

const toggleNav = () => {
  navbar.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNav);



/**
 * HEADER ANIMATION
 * When scrolled donw to 100px header will be active
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});



/**
 * SLIDER
 */

const slider = document.querySelector("[data-slider]");
const sliderContainer = document.querySelector("[data-slider-container]");
const sliderPrevBtn = document.querySelector("[data-slider-prev]");
const sliderNextBtn = document.querySelector("[data-slider-next]");

let totalSliderVisibleItems = Number(getComputedStyle(slider).getPropertyValue("--slider-items"));
let totalSlidableItems = sliderContainer.childElementCount - totalSliderVisibleItems;

let currentSlidePos = 0;

const moveSliderItem = function () {
  sliderContainer.style.transform = `translateX(-${sliderContainer.children[currentSlidePos].offsetLeft}px)`;
}

/**
 * NEXT SLIDE
 */

const slideNext = function () {
  const slideEnd = currentSlidePos >= totalSlidableItems;

  if (slideEnd) {
    currentSlidePos = 0;
  } else {
    currentSlidePos++;
  }

  moveSliderItem();
}

sliderNextBtn.addEventListener("click", slideNext);

/**
 * PREVIOUS SLIDE
 */

const slidePrev = function () {
  if (currentSlidePos <= 0) {
    currentSlidePos = totalSlidableItems;
  } else {
    currentSlidePos--;
  }

  moveSliderItem();
}

sliderPrevBtn.addEventListener("click", slidePrev);

/**
 * RESPONSIVE
 */
window.addEventListener("resize", function () {
  totalSliderVisibleItems = Number(getComputedStyle(slider).getPropertyValue("--slider-items"));
  totalSlidableItems = sliderContainer.childElementCount - totalSliderVisibleItems;

  moveSliderItem();
});
  </script>

  <!--
    - ionicon link
  -->
  
  
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

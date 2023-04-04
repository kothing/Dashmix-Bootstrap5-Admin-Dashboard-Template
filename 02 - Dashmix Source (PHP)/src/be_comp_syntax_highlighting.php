<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/highlightjs/styles/atom-one-dark.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Syntax Highlighting</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Syntax Highlighting</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- Syntax Highlighting functionality is initialized in Helpers.jsHighlightjs() -->
<!-- For more info and examples you can check out https://highlightjs.org/usage/ -->
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">HighlightJS</h3>
    </div>
    <div class="block-content">
      <!-- HTML -->
      <h4 class="content-heading">HTML</h4>
      <pre><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
      <!-- END HTML -->

      <!-- CSS -->
      <h4 class="content-heading">CSS</h4>
      <pre><code class="css">/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {

}

/* Sub section 2 */
selector {

}

/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {

}

/* Sub section 2 */
selector {

}</code></pre>
      <!-- END CSS -->

      <!-- SCSS -->
      <h4 class="content-heading">SCSS</h4>
      <pre><code class="scss">$font-stack: Helvetica, sans-serif;
$primary-color: #333;

body {
  font: 100% $font-stack;
  color: $primary-color;
}</code></pre>
      <!-- END SCSS -->

      <!-- Less -->
      <h4 class="content-heading">Less</h4>
      <pre><code class="less">@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
    -webkit-box-shadow: @style @c;
    box-shadow:         @style @c;
}

.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
    .box-shadow(@style, rgba(0, 0, 0, @alpha));
}

.box {
    color: saturate(@base, 5%);
    border-color: lighten(@base, 30%);
    div { .box-shadow(0 0 5px, 30%) }
}</code></pre>
      <!-- END Less -->

      <!-- JavaScript -->
      <h4 class="content-heading">JavaScript</h4>
      <pre><code class="javascript">/*
 *  Document   : app.js
 *  Author     : pixelcave
 */

var App = function() {

    // User Interface init
    var uiInit = function() {

    };

    return {
        init: function() {
            uiInit();
        }
    };
}();

// Initialize app
App.init();</code></pre>
      <!-- END JavaScript -->

      <!-- PHP -->
      <h4 class="content-heading">PHP</h4>
      <pre><code class="php">&lt;?php
class App {
    function home()
    {
        // ...
    }

    function profile()
    {
        // ...
    }

    function settings()
    {
        // ...
    }
}</code></pre>
      <!-- END PHP -->

      <!-- Ruby -->
      <h4 class="content-heading">Ruby</h4>
      <pre><code class="ruby"># Output "I love Ruby"
say = "I love Ruby"
puts say

# Output "I *LOVE* RUBY"
say['love'] = "*love*"
puts say.upcase

# Output "I *love* Ruby"
# five times
5.times { puts say }</code></pre>
      <!-- END Ruby -->

      <!-- Python -->
      <h4 class="content-heading">Python</h4>
      <pre><code class="python">name = raw_input('What is your name?\n')

print 'Hi, %s.' % name</code></pre>
      <!-- END Python -->

      <!-- JSON -->
      <h4 class="content-heading">JSON</h4>
      <pre><code class="json">{
    "menu": {
        "id": "file",
        "value": "File",
        "popup": {
            "menuitem": [
                {"value": "New", "onclick": "CreateNewDoc()"},
                {"value": "Open", "onclick": "OpenDoc()"},
                {"value": "Close", "onclick": "CloseDoc()"}
            ]
        }
    }
}</code></pre>
      <!-- END JSON -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/highlightjs/highlight.pack.min.js'); ?>

<!-- Page JS Helpers (Highlight.js Plugin) -->
<script>Dashmix.helpersOnLoad(['js-highlightjs']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>

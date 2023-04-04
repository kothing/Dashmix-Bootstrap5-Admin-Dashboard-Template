<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Chat</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Chat</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- Chat functionality is initialized in js/pages/be_comp_chat.min.js which was auto compiled from _js/pages/be_comp_chat.js -->
<!--
    You can use the following JS function to add a header message to a chat window:
    Chat.addHeader(chatId, chatMsg, chatMsgLevel)

    chatId         : the data-chat-id attribute of the chat window
    chatMsg        : the header message you would like to add
    chatMsgLevel   : 'self' aligns the header to the right (default is left)

    You can use the following JS function to add a message to a chat window:
    Chat.addMessage(chatId, chatMsg, chatMsgLevel)

    chatId         : the data-chat-id attribute of the chat window
    chatMsg        : the message you would like to add
    chatMsgLevel   : 'self' the user sends the message (default is when the user receives the message)
-->
<div class="content">
  <div class="row">
    <div class="col-xl-4">
      <!-- Chat #1 -->
      <div class="block block-rounded">
        <!-- Chat #1 Header -->
        <div class="block-content block-content-full bg-primary text-center">
          <?php $dm->get_avatar(10, false, 0, true); ?>
          <p class="fs-lg fw-semibold text-white mt-3 mb-0">
            James Smith
          </p>
          <p class="text-white-75 mb-0">
            Web Developer
          </p>
        </div>
        <!-- END Chat #1 Header -->

        <!-- Chat #1 Messages -->
        <div class="js-chat-messages block-content block-content-full text-break overflow-y-auto" data-chat-id="1" style="height: 300px;"></div>

        <!-- Chat #1 Input -->
        <div class="js-chat-form block-content p-2 bg-body-dark">
          <form action="be_comp_chat.php" method="POST">
            <input type="text" class="js-chat-input form-control form-control-alt" data-target-chat-id="1" placeholder="Type a message..">
          </form>
        </div>
        <!-- END Chat #1 Input -->
      </div>
      <!-- END Chat #1 -->
    </div>
    <div class="col-xl-4">
      <!-- Chat #2 -->
      <div class="block block-rounded">
        <!-- Chat #2 Header -->
        <div class="block-content block-content-full bg-gd-fruit text-center">
          <?php $dm->get_avatar(7, false, 0, true); ?>
          <p class="fs-lg fw-semibold text-white mt-3 mb-0">
            Susan Day
          </p>
          <p class="text-white-75 mb-0">
            Web Designer
          </p>
        </div>
        <!-- END Chat #2 Header -->

        <!-- Chat #2 Messages -->
        <div class="js-chat-messages block-content block-content-full text-break overflow-y-auto" data-chat-id="2" style="height: 300px;"></div>

        <!-- Chat #2 Input -->
        <div class="js-chat-form block-content p-2 bg-body-dark">
          <form action="be_comp_chat.php" method="POST">
            <input type="text" class="js-chat-input form-control form-control-alt" data-target-chat-id="2" placeholder="Type a message..">
          </form>
        </div>
        <!-- END Chat #2 Input -->
      </div>
      <!-- END Chat #2 -->
    </div>
    <div class="col-xl-4">
      <!-- Chat #3 -->
      <div class="block block-rounded">
        <!-- Chat #3 Header -->
        <div class="block-content block-content-full bg-gd-dusk text-center">
          <?php $dm->get_avatar(11, false, 0, true); ?>
          <p class="fs-lg fw-semibold text-white mt-3 mb-0">
            Michael Snow
          </p>
          <p class="text-white-75 mb-0">
            Editor
          </p>
        </div>
        <!-- END Chat #3 Header -->

        <!-- Chat #3 Messages -->
        <div class="js-chat-messages block-content block-content-full text-break overflow-y-auto" data-chat-id="3" style="height: 300px;"></div>

        <!-- Chat #3 Input -->
        <div class="js-chat-form block-content p-2 bg-body-dark">
          <form action="be_comp_chat.php" method="POST">
            <input type="text" class="js-chat-input form-control form-control-alt" data-target-chat-id="3" placeholder="Type a message..">
          </form>
        </div>
        <!-- END Chat #3 Input -->
      </div>
      <!-- END Chat #3 -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_chat.min.js'); ?>

<script>
  Dashmix.onLoad(function(){
    // Add demonstration headers and messages for Chat #1
    Chat.addHeader(1, 'Yesterday');
    Chat.addMessage(1, 'Hi, are you available for freelance work?');
    Chat.addHeader(1, 'Today', 'self');
    Chat.addMessage(1, 'Hey James!', 'self');
    Chat.addMessage(1, 'Yes, feel free to send me your project details', 'self');

    // Add demonstration headers and messages for Chat #2
    Chat.addHeader(2, 'Yesterday');
    Chat.addMessage(2, 'Hi Admin!');
    Chat.addMessage(2, 'How are you?');
    Chat.addHeader(2, 'Today', 'self');
    Chat.addMessage(2, 'I\'m fine, thanks!', 'self');

    // Add demonstration headers and messages for Chat #3
    Chat.addHeader(3, 'Today');
    Chat.addMessage(3, 'Hi there! Do you have a minute?');
  });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>

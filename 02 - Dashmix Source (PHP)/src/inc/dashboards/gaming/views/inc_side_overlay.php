<?php
/**
 * dashboards/gaming/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
  <!-- Side Header -->
  <div class="bg-primary">
    <div class="content-header">
      <div class="fs-lg fw-light text-white">
        Server Settings
      </div>

      <!-- Close Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
        <i class="fa fa-times-circle"></i>
      </a>
      <!-- END Close Side Overlay -->
    </div>
  </div>
  <!-- END Side Header -->

  <!-- Side Content -->
  <div class="content-side">
    <div class="block pull-x">
      <div class="block-content block-content-sm block-content-full bg-body">
        <span class="text-uppercase fs-sm fw-bold">Settings</span>
      </div>
      <div class="block-content">
        <form action="db_gaming.php" method="POST" onsubmit="return false;">
          <div class="mb-4">
            <label class="form-label" for="dm-gaming-mode">Game Mode</label>
            <select class="form-select" id="dm-gaming-mode" name="dm-gaming-mode">
              <option value="1">Survival</option>
              <option value="2" selected>Creative</option>
              <option value="3">Adventure</option>
            </select>
            <p class="form-text">
              The default game mode for players on the server.
            </p>
          </div>
          <div class="mb-4">
            <label class="form-label" for="dm-gaming-difficulty">Game Difficulty</label>
            <select class="form-select" id="dm-gaming-difficulty" name="dm-gaming-difficulty">
              <option value="1">Peaceful</option>
              <option value="2">Easy</option>
              <option value="3" selected>Normal</option>
              <option value="4">Hard</option>
            </select>
            <p class="form-text">
              How difficult the game is for players in survival mode.
            </p>
          </div>
          <div class="mb-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="dm-gaming-hardcore" name="dm-gaming-hardcore" value="1">
              <label class="form-check-label" for="dm-gaming-hardcore">Hardcore Mode</label>
            </div>
            <p class="form-text">
              Permanently ban players upon death.
            </p>
          </div>
          <div class="mb-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="dm-gaming-monsters" name="dm-gaming-monsters" value="1" checked>
              <label class="form-check-label" for="dm-gaming-monsters">Enable Monsters</label>
            </div>
            <p class="form-text">
              Whether or not monsters are allowed to spawn in-game
            </p>
          </div>
          <div class="mb-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="dm-gaming-animals" name="dm-gaming-animals" value="1" checked>
              <label class="form-check-label" for="dm-gaming-animals">Enable Animals</label>
            </div>
            <p class="form-text">
              Whether or not friendly animals are allowed to spawn in-game
            </p>
          </div>
          <div class="mb-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="dm-gaming-npcs" name="dm-gaming-npcs" value="1" checked>
              <label class="form-check-label" for="dm-gaming-npcs">Enable NPCs</label>
            </div>
            <p class="form-text">
              Whether or not friendly mobs are allowed to spawn in-game
            </p>
          </div>
          <div class="mb-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="dm-gaming-pvp" name="dm-gaming-pvp" value="1">
              <label class="form-check-label" for="dm-gaming-pvp">Enable PvP</label>
            </div>
            <p class="form-text">
              Whether or not players can harm and kill each other
            </p>
          </div>
          <div class="mb-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="dm-gaming-nether" name="dm-gaming-nether" value="1" checked>
              <label class="form-check-label" for="dm-gaming-nether">Enable Nether</label>
            </div>
            <p class="form-text">
              Whether or not 'The Nether' can be accessed via portals
            </p>
          </div>
          <div class="mb-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="dm-gaming-flight" name="dm-gaming-flight" value="1">
              <label class="form-check-label" for="dm-gaming-flight">Allow Flight</label>
            </div>
            <p class="form-text">
              Whether or not players can use fly-hacks in survival mode
            </p>
          </div>
        </form>
      </div>
      <div class="block-content row justify-content-center border-top">
        <div class="col-9">
          <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-fw fa-save opacity-50 me-1"></i> Save
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->

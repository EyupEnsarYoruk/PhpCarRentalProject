<?php require "views/header.php"; ?>

<div  style="width:100%;">
  <div class="container mt-3 mb-3">
    <div class="row text-left mb-2">  
      <div class="col-xl-12 col-md-12 text-left p-0 m-0 d-flex align-items-center">
          <a href="#!" class="menu-toggle me-2 mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 -960 960 960" class=" menusvg"><path d="M153.333-240q-14.166 0-23.75-9.617Q120-259.234 120-273.45q0-14.216 9.583-23.716 9.584-9.5 23.75-9.5h653.334q14.166 0 23.75 9.617Q840-287.432 840-273.216q0 14.216-9.583 23.716-9.584 9.5-23.75 9.5H153.333Zm0-206.667q-14.166 0-23.75-9.617Q120-465.901 120-480.117q0-14.216 9.583-23.716 9.584-9.5 23.75-9.5h653.334q14.166 0 23.75 9.617Q840-494.099 840-479.883q0 14.216-9.583 23.716-9.584 9.5-23.75 9.5H153.333Zm0-206.667q-14.166 0-23.75-9.617Q120-672.568 120-686.784q0-14.216 9.583-23.716 9.584-9.5 23.75-9.5h653.334q14.166 0 23.75 9.617Q840-700.766 840-686.55q0 14.216-9.583 23.716-9.584 9.5-23.75 9.5H153.333Z"/></svg>
          </a>
          <h1 class="h4 mb-0 mvc-renk"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000" class="baslikPanel" style="margin-top:-5px;">
              <path d="M0 0h24v24H0V0z" fill="none"/>
              <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/>
            </svg> 
            KİRA BAŞLAT
        </h1>
      </div> 
    </div>
    <div class="col-xl-12 col-md-12 mb-12 border-left-mvc text-left p-2 mb-2 navigasyonunanasi">
        <a href="<?php echo URL ?>/kiralar/kiraListele" class="navigasyon">Kiralar</a> 
        / Kira Başlatma
    </div>
    <form method="post" action="<?php echo URL."/kiralar/kiraBaslatSon"?>">
      <div class="mb-3 mt-3">
        <label>Aracı seç:</label>
        <select name="arac_id" class="form-control">
          <option value="0">Araç Seç</option>
          <?php 
            foreach ($veri["araclar"] as $value) {
              echo "<option value='$value[0]'>$value[1]</option>";
            }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label>Firma Seç:</label>
        <select name="firma_id" class="form-control">
          <option value="0">Firma Seç</option>
          <?php 
            foreach ($veri["firmalar"] as $value) {
              echo "<option value='$value[0]'>$value[1]</option>";
            }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label>Sözleşme Başlangıçı:</label>
        <input type="date" name="sozbas" class="form-control">
      </div>
      <div class="mb-3">
        <label>Sözleşme Bitiş:</label>
        <input type="date" name="sozbit" class="form-control">
      </div>
      <div class="mb-3">
        <label>Sözleşme Başlangıç KM:</label>
        <input type="text" name="sozbaskm" class="form-control">
      </div>
      <div class="mb-3">
        <label>Kiralama Ücreti:</label>
        <input type="text" name="ucret" class="form-control">
      </div>
      <div class="d-grid">
        <button type="submit" name="submit" value="Ekle" class="btn btn-primary">Kirala</button>
      </div>
    </form>
  </div>
</div>
	
<?php require "views/footer.php"; ?>
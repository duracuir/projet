<main>
		<section class="gallery-links">
			<div class="col-xs-12">
                 <div class="box">
                     <h3 class="heading heading3 photo profile">Télécharger Photos</h3>
                     <small>Postez une photo sensuelle et discrete qui transcrit vos atouts sexeulles et plus ...
                      pas de photo pronographique. si non votre compte sérait <b>Bloqué<b>. </small>
                        <div class="row">
                            <div class="col-xs-4 grp"></div>
                                 <div class="col-xs-6 grp">
                                     <div class="col-md-12 col-sm-12">
                            				<?php
                            				if(isset($_SESSION['username'])){
                            				echo '<div class="gallery-upload">
                            					<form action="include/gallery.upload.inc.php" method="POST" enctype="multipart/form-data">
                            					<input type="text" name="filename" placeholder="usermane...">
                            					<input type="file" name="file" >
                            					<button type="submit" name="submit">VALIDER</button>		
                            					</form>	
                            				</div>';}
                            			?>
                            	 </div>
			                  </div>
                            </div>
                        </div>
                      </div>
                     </div>
                    </div>
                  </div>
		</section>
	</main>
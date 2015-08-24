<section class="results white-bg" id="results">  <div class="container">    <!-- SECTION HEADER -->    <div class="section-header">      <!-- SECTION TITLE -->      <?php		$zerif_ourfocus_title = get_theme_mod('zerif_ourfocus_title',__('RESULTS','zerif-lite'));				if( !empty($zerif_ourfocus_title) ):			echo '<h5 class="stanchion-header">'.__($zerif_ourfocus_title,'zerif-lite').'</h5>';		endif;			?>         <!--STANCHION!!!-->      <?php		  $zerif_ourfocus_subtitle = get_theme_mod('zerif_ourfocus_subtitle',__('Insight. Foresight. Action.','zerif-lite'));		  if( !empty($zerif_ourfocus_subtitle) ):			  echo '<h2 class="stanchion-slogan">'.__($zerif_ourfocus_subtitle,'zerif-lite').'</h2>';		  endif;		  ?>    <!--END STANCHION!!!-->      <?php		$zerif_ourfocus_subtitle = get_theme_mod('zerif_ourfocus_subtitle',__('By giving clients the correct information, and access to Stanchion’s decades of experience, they can make the right decisions - transforming information into action.','zerif-lite'));		if( !empty($zerif_ourfocus_subtitle) ):			echo '<h4 class="stanchion-description">'.__($zerif_ourfocus_subtitle,'zerif-lite').'</h4>';		endif;		?>    </div>    <div class="row">      <?php			if ( is_active_sidebar( 'sidebar-ourfocus' ) ) :				dynamic_sidebar( 'sidebar-ourfocus' );			else:				the_widget( 'zerif_ourfocus','title=SPEED&text=Speed is important, but it’s not just about the speed of transactions, its also how fast ops teams can respond to and predict issues, and the pace at which companies can keep up with the advances in technology.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/stanchion/speed.png", array('before_widget' => '', 'after_widget' => '') );				the_widget( 'zerif_ourfocus','title=SECURITY&text=Payments are sensitive and any security breach, no matter the scale, presents a massive business risk. Proactive monitoring and management of the transactions significantly reduces this risk.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/stanchion/security.png", array('before_widget' => '', 'after_widget' => '') );				the_widget( 'zerif_ourfocus','title=MEASURABILITY&text=The ability to precisely evaluate the data, reflect on the delivery of both the systems and the ops teams and to predict what is required to maintain performance will ensure long term stability, availability and integrity.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/stanchion/manageability.png", array('before_widget' => '', 'after_widget' => '') );				the_widget( 'zerif_ourfocus','title=FORESIGHT&text=Working with Stanchion’s experienced team and its market leading solutions will ensure that there is a constant sense of what is on the horizon – for the business and the industry.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/stanchion/foresight.png", array('before_widget' => '', 'after_widget' => '') );			endif;			?>    </div>  </div>  <!-- / END CONTAINER --></section><!-- / END FOCUS SECTION -->
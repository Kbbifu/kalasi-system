<div class="row">
	
    
	<div class="col-md-12">
		<div class="row">
            <div class="col-md-4">
            
                <div class="tile-stats tile-cyan">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount_paid)as total FROM invoice')->row(); echo floatval($query->total);?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Montant Collecté');?></h3>
                   
                </div>
                
            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-cyan">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount_paid)as total FROM invoice')->row(); echo floatval($query->total);?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Situation 1er Trimeste');?></h3>
                   
                </div>
                
            </div>

            <div class="col-md-4">
            
            <div class="tile-stats tile-cyan">
                <div class="icon"><i class="entypo-credit-card"></i></div>
                <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount_paid)as total FROM invoice')->row(); echo floatval($query->total);?>" 
                        data-postfix="" data-duration="500" data-delay="0">0</div>
                
                <h3><?php echo ('Situation 2ème Trimeste');?></h3>
            
               
            </div>

            <div class="col-md-4">
            
            <div class="tile-stats tile-cyan">
                <div class="icon"><i class="entypo-credit-card"></i></div>
                <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount_paid)as total FROM invoice')->row(); echo floatval($query->total);?>" 
                        data-postfix="" data-duration="500" data-delay="0">0</div>
                
                <h3><?php echo ('Situation 3ème Trimeste');?></h3>
               
            </div>
            
        </div>
            
        </div>

            <div class="col-md-4">
            
            <div class="tile-stats tile-cyan">
                <div class="icon"><i class="entypo-credit-card"></i></div>
                <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount_paid)as total FROM invoice')->row(); echo floatval($query->total);?>" 
                        data-postfix="" data-duration="500" data-delay="0">0</div>
                
                <h3><?php echo ('Situation 1er Trimeste');?></h3>
               
            </div>
            
        </div>
            
            <div class="col-md-4">
            
                <div class="tile-stats tile-cyan">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount)as total FROM payment WHERE payment_type ="income" AND str_to_date(jour, "%d %M,%Y")=CURRENT_DATE')->row(); echo floatval($query->total);?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Situation journalière');?></h3>
                   
                </div>
                
            </div>
            <div class="col-md-4">
            
                <div class="tile-stats tile-cyan">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount)as total FROM payment WHERE payment_type ="income" AND MONTH(str_to_date(jour, "%d %M,%Y"))=MONTH(CURRENT_DATE)')->row(); echo floatval($query->total);?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Situation mensuelle');?></h3>
                   
                </div>
                
            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-graduation-cap"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT COUNT(student_id) AS effectif FROM student WHERE statut="Actif"')->row(); echo floatval($query->effectif);?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Elèves Actifs');?></h3>
                    
                </div>
                
            </div>
            <div class="col-md-4">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('teacher');?>" 
                    		data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                    <h3><?php echo ('Enseignants');?></h3>
                   
                </div>
                
            </div>

            
            <div class="col-md-4">
            
                <div class="tile-stats tile-purple">
                    <div class="icon"><i class="entypo-user"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT COUNT(student_id) AS depart FROM student WHERE statut="Inactif"')->row(); echo floatval($query->depart);?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Eleves Inactifs');?></h3>
                   
                </div>
                
            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-black">
                    <div class="icon"><i class="entypo-flow-tree"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('class');?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Classes Organisées');?></h3>
                   
                </div>
                
            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-brown">
                    <div class="icon"><i class="entypo-credit-card"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT SUM(amount)as total FROM payment WHERE payment_type ="expense" AND MONTH(str_to_date(jour, "%d %M,%Y"))=MONTH(CURRENT_DATE)')->row(); echo floatval($query->total2);?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Montants Dépensés Mensuelles');?></h3>
                   
                </div>
                
            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-pink">
                    <div class="icon"><i class="entypo-comment"></i></div>
                    <div class="num" data-start="0" data-end="<?php $query = $this->db->query('SELECT * FROM message WHERE sender = "admin-1" && read_status="0"'); echo $query->num_rows();?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo ('Boite de reception');?></h3>
                   
                </div>
                
            </div>

                        
    	</div>
    </div>

    <div class="col-md-12">
    	<div class="row">
            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">    
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-calendar"></i>
                            <?php echo get_phrase('event_schedule');?>
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</div>



    <script>
  $(document).ready(function() {
	  
	  var calendar = $('#notice_calendar');
				
				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: false,
					firstDay: 1,
					height: 530,
					droppable: false,
					
					events: [
						<?php 
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
						},
						<?php 
						endforeach
						?>
						
					]
				});
	});
  </script>

  


		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo ('Ajouter');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/online_admission/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	<div class="row">
	<div class="col-md-6">
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Nom');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="" autofocus>
						</div>
					</div>
				</div><div class="col-md-6">	
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Date de Naissance');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
						</div> 
					</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Genre');?></label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control">
                              <option value=""><?php echo ('Selectionner');?></option>
                              <option value="Male"><?php echo ('Homme');?></option>
                              <option value="Female"><?php echo ('Femme');?></option>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Addresse');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="" >
						</div> 
					</div>
                    
					
					
					
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Selectionner image</span>
										<span class="fileinput-exists">Changer</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo ('Ajouter');?></button>
						</div>
					</div>
                    
                    </div>
                <?php echo form_close();?>
                
            </div>
        </div>

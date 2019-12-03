<div class="row">
	<div class="col-md-12">
		&nbsp;
	</div>
</div>
<div class="row poll-options-access">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12">
				<h4>
					<?php _e( 'Permissions', 'yop-poll' );?>
				</h4>
			</div>
		</div>
		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-md-3 field-caption">
					<?php _e( 'Vote Permissions', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<?php
			        $vote_permissions_guest = '';
			        $vote_permissions_wordpress = '';
			        $vote_permissions_facebook = '';
			        $vote_permissions_google = '';
			        if ( true === in_array('guest', $poll->meta_data['options']['access']['votePermissions'] ) ) {
			            $vote_permissions_guest = 'selected';
			        }
			        if ( true === in_array('wordpress', $poll->meta_data['options']['access']['votePermissions'] ) ) {
			            $vote_permissions_wordpress = 'selected';
			        }
			        if ( true === in_array('facebook', $poll->meta_data['options']['access']['votePermissions'] ) ) {
			            $vote_permissions_facebook = 'selected';
			        }
			        if ( true === in_array('google', $poll->meta_data['options']['access']['votePermissions'] ) ) {
			            $vote_permissions_google = 'selected';
			        }
			        ?>
			        <select name="vote-permissions" class="vote-permissions" style="width:100%" multiple="multiple">
			            <option value="guest" <?php echo $vote_permissions_guest;?>><?php _e( 'Guest', 'yop-poll' );?></option>
			            <option value="wordpress" <?php echo $vote_permissions_wordpress;?>><?php _e( 'Wordpress', 'yop-poll' );?></option>
			            <option value="facebook" <?php echo $vote_permissions_facebook;?>><?php _e( 'Facebook', 'yop-poll' );?></option>
			            <option value="google" <?php echo $vote_permissions_google;?>><?php _e( 'Google', 'yop-poll' );?></option>
			        </select>
				</div>
			</div>
			<div class="form-group block-voters-section">
				<div class="col-md-3">
					<?php _e( 'Block Voters', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
				<?php
			        $block_voters_no_block = '';
			        $block_voters_by_cookie = '';
			        $block_voters_by_ip = '';
					$block_voters_by_user_id = '';
					$block_type_section_class = 'hide';
					$block_time_section_class = 'hide';
			        if ( ( true === in_array( 'no-block', $poll->meta_data['options']['access']['blockVoters'] ) ) || ( 0 === count( $poll->meta_data['options']['access']['blockVoters'] ) ) ) {
						$block_voters_no_block = 'selected';
						$block_type_section_class = 'hide';
						$block_time_section_class = 'hide';
			        }
			        if ( true === in_array( 'by-cookie', $poll->meta_data['options']['access']['blockVoters'] ) ) {
						$block_voters_by_cookie = 'selected';
						$block_type_section_class = '';
			            $block_time_section_class = '';
			        }
			        if ( true === in_array( 'by-ip', $poll->meta_data['options']['access']['blockVoters'] ) ) {
						$block_voters_by_ip = 'selected';
						$block_type_section_class = '';
			            $block_time_section_class = '';
			        }
			        if ( true === in_array( 'by-user-id', $poll->meta_data['options']['access']['blockVoters'] ) ) {
						$block_voters_by_user_id = 'selected';
						$block_type_section_class = '';
			            $block_time_section_class = '';
			        }
			        ?>
			        <select name="block-voters" class="block-voters" style="width:100%" multiple="multiple">
			            <option value="no-block" <?php echo $block_voters_no_block;?>><?php _e( 'Don\'t Block', 'yop-poll' );?></option>
						<optgroup label="<?php _e( 'Block By', 'yop-poll' );?>">
							<option value="by-cookie" <?php echo $block_voters_by_cookie;?>><?php _e( 'Cookie', 'yop-poll' );?></option>
							<option value="by-ip" <?php echo $block_voters_by_ip;?>><?php _e( 'Ip', 'yop-poll' );?></option>
							<option value="by-user-id" <?php echo $block_voters_by_user_id;?>><?php _e( 'User Id', 'yop-poll' );?></option>
						</optgroup>
			        </select>
				</div>
			</div>
			<div class="form-group block-type-section <?php echo $block_type_section_class;?>">
				<div class="col-md-3 field-caption">
					<?php _e( 'Block Period', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
				<?php
				$block_length_type_forever = '';
				$block_length_type_limited = '';
				if ( false === isset( $poll->meta_data['options']['access']['blockLengthType'] ) ) {
					$poll->meta_data['options']['access']['blockLengthType'] = 'limited-time';
				}
				switch( $poll->meta_data['options']['access']['blockLengthType'] ) {
					case 'forever':{
						$block_length_type_forever = 'selected';
						break;
					}
					case 'limited-time':{
						$block_length_type_limited = 'selected';
						break;
					}
					default: {
						$block_length_type_forever = 'selected';
						break;
					}
				}
				?>
					<select class="block-length-type" style="width:100%">
						<option value="forever" <?php echo $block_length_type_forever;?>>
							<?php _e( 'Forever', 'yop-poll' );?>
						</option>
						<option value="limited-time" <?php echo $block_length_type_limited;?>>
							<?php _e( 'Limited Time', 'yop-poll' );?>
						</option>
					</select>
				</div>
			</div>
			<?php
			if ( ( 'forever' === $poll->meta_data['options']['access']['blockLengthType'] ) || ( true === in_array( 'no-block', $poll->meta_data['options']['access']['blockVoters'] ) ) || ( 0 === count( $poll->meta_data['options']['access']['blockVoters'] ) ) ) {
				$block_time_section_class = 'hide';
			} else {
				$block_time_section_class = '';
			}
			?>
			<div class="form-group block-length-section <?php echo $block_time_section_class;?>">
				<div class="col-md-3 field-caption">
					<?php _e( 'Period', 'yop-poll' );?>
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control block-length-1" value="<?php echo $poll->meta_data['options']['access']['blockForValue'];?>"/>
					<?php
		            $block_for_period_minutes = '';
		            $block_for_period_hours = '';
		            $block_for_period_days = '';
		            switch ( $poll->meta_data['options']['access']['blockForPeriod'] ) {
		                case 'minutes': {
		                    $block_for_period_minutes = 'selected';
		                    break;
		                }
		                case 'hours': {
		                    $block_for_period_hours = 'selected';
		                    break;
		                }
		                case 'days': {
		                    $block_for_period_days = 'selected';
		                    break;
		                }
		            }
		            ?>
				</div>
				<div class="col-md-7">
		            <select class="block-length-2" style="width:100%">
		                <option value="minutes" <?php echo $block_for_period_minutes?>><?php _e( 'Minutes', 'yop-poll' );?></option>
		                <option value="hours" <?php echo $block_for_period_hours?>><?php _e( 'Hours', 'yop-poll' );?></option>
		                <option value="days" <?php echo $block_for_period_days?>><?php _e( 'Days', 'yop-poll' );?></option>
		            </select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					<?php _e( 'Limit Number Of Votes per User', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<?php
			        if ( 'yes' === $poll->meta_data['options']['access']['limitVotesPerUser'] ) {
			            $limit_votes_per_user_yes = 'selected';
			            $limit_votes_per_user_no = '';
			            $votes_per_user_section_class = '';
			        } else {
			            $limit_votes_per_user_yes = '';
			            $limit_votes_per_user_no = 'selected';
			            $votes_per_user_section_class = 'hide';
			        }
			        ?>
			        <select class="limit-votes-per-user" style="width:100%">
			            <option value="no" <?php echo $limit_votes_per_user_no;?>><?php _e( 'No', 'yop-poll' );?></option>
			            <option value="yes" <?php echo $limit_votes_per_user_yes;?>><?php _e( 'Yes', 'yop-poll' );?></option>
			        </select>
				</div>
			</div>
			<div class="form-group votes-per-user-section <?php echo $votes_per_user_section_class;?>">
				<div class="col-md-3 field-caption">
					<?php _e( 'Votes per user', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control votes-per-user-allowed" value="<?php echo $poll->meta_data['options']['access']['votesPerUserAllowed']?>" style="width:100%" />
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		&nbsp;
	</div>
</div>

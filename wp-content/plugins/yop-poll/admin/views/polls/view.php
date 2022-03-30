<?php
switch ( $params['order_by'] ) {
    case 'name':{
        $name_sort_order = ( isset( $params['sort_order'] ) && ( 'asc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $name_sort_order_display = ( isset( $params['sort_order'] ) && ( 'desc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $name_column_class = 'sorted';
        $status_sort_order = 'asc';
        $status_sort_order_display = 'desc';
        $status_column_class = 'sortable';
        $total_submits_sort_order = 'asc';
        $total_submits_sort_order_display = 'desc';
        $total_submits_column_class = 'sortable';
        $author_sort_order = 'asc';
        $author_sort_order_display = 'desc';
        $author_column_class = 'sortable';
        $start_date_sort_order = 'asc';
        $start_date_sort_order_display = 'desc';
        $start_date_column_class = 'sortable';
        $end_date_sort_order = 'asc';
        $end_date_sort_order_display = 'desc';
        $end_date_column_class = 'sortable';
        break;
    }
    case 'status':{
        $name_sort_order = 'asc';
        $name_sort_order_display = 'desc';
        $name_column_class = 'sortable';
        $status_sort_order = ( isset( $params['sort_order'] ) && ( 'asc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $status_sort_order_display = ( isset( $params['sort_order'] ) && ( 'desc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $status_column_class = 'sorted';
        $total_submits_sort_order = 'asc';
        $total_submits_sort_order_display = 'desc';
        $total_submits_column_class = 'sortable';
        $author_sort_order = 'asc';
        $author_sort_order_display = 'desc';
        $author_column_class = 'sortable';
        $start_date_sort_order = 'asc';
        $start_date_sort_order_display = 'desc';
        $start_date_column_class = 'sortable';
        $end_date_sort_order = 'asc';
        $end_date_sort_order_display = 'desc';
        $end_date_column_class = 'sortable';
        break;
    }
    case 'votes':{
        $name_sort_order = 'asc';
        $name_sort_order_display = 'desc';
        $name_column_class = 'sortable';
        $status_sort_order = 'asc';
        $status_sort_order_display = 'desc';
        $status_column_class = 'sortable';
        $total_submits_sort_order = ( isset( $params['sort_order'] ) && ( 'asc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $total_submits_sort_order_display = ( isset( $params['sort_order'] ) && ( 'desc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $total_submits_column_class = 'sorted';
        $author_sort_order = 'asc';
        $author_sort_order_display = 'desc';
        $author_column_class = 'sortable';
        $start_date_sort_order = 'asc';
        $start_date_sort_order_display = 'desc';
        $start_date_column_class = 'sortable';
        $end_date_sort_order = 'asc';
        $end_date_sort_order_display = 'desc';
        $end_date_column_class = 'sortable';
        break;
    }
    case 'author':{
        $name_sort_order = 'asc';
        $name_sort_order_display = 'desc';
        $name_column_class = 'sortable';
        $status_sort_order = 'asc';
        $status_sort_order_display = 'desc';
        $status_column_class = 'sortable';
        $total_submits_sort_order = 'asc';
        $total_submits_sort_order_display = 'desc';
        $total_submits_column_class = 'sortable';
        $author_sort_order = ( isset( $params['sort_order'] ) && ( 'asc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $author_sort_order_display = ( isset( $params['sort_order'] ) && ( 'desc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $author_column_class = 'sorted';
        $start_date_sort_order = 'asc';
        $start_date_sort_order_dislay = 'desc';
        $start_date_column_class = 'sortable';
        $end_date_sort_order = 'asc';
        $end_date_sort_order_display = 'desc';
        $end_date_column_class = 'sortable';
        break;
    }
    case 'sdate':{
        $name_sort_order = 'asc';
        $name_sort_order_display = 'desc';
        $name_column_class = 'sortable';
        $status_sort_order = 'asc';
        $status_sort_order_display = 'desc';
        $status_column_class = 'sortable';
        $total_submits_sort_order = 'asc';
        $total_submits_sort_order_display = 'desc';
        $total_submits_column_class = 'sortable';
        $author_sort_order = 'asc';
        $author_sort_order_display = 'desc';
        $author_column_class = 'sortable';
        $start_date_sort_order = ( isset( $params['sort_order'] ) && ( 'asc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $start_date_sort_order_display = ( isset( $params['sort_order'] ) && ( 'desc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $start_date_column_class = 'sorted';
        $end_date_sort_order = 'asc';
        $end_date_sort_order_display = 'desc';
        $end_date_column_class = 'sortable';
        break;
    }
    case 'edate':{
        $name_sort_order = 'asc';
        $name_sort_order_display = 'desc';
        $name_column_class = 'sortable';
        $status_sort_order = 'asc';
        $status_sort_order_display = 'desc';
        $status_column_class = 'sortable';
        $total_submits_sort_order = 'asc';
        $total_submits_sort_order_display = 'desc';
        $total_submits_column_class = 'sortable';
        $author_sort_order = 'asc';
        $author_sort_order_display = 'desc';
        $author_column_class = 'sortable';
        $start_date_sort_order = 'asc';
        $start_date_sort_order_display = 'desc';
        $start_date_column_class = 'sortable';
        $end_date_sort_order = ( isset( $params['sort_order'] ) && ( 'asc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $end_date_sort_order_display = ( isset( $params['sort_order'] ) && ( 'desc' === $params['sort_order'] ) ) ? 'desc' : 'asc';
        $end_date_column_class = 'sorted';
        break;
    }
    default: {
        $name_sort_order = 'asc';
        $name_sort_order_display = 'desc';
        $name_column_class = 'sortable';
        $status_sort_order = 'asc';
        $status_sort_order_display = 'desc';
        $status_column_class = 'sortable';
        $total_submits_sort_order = 'asc';
        $total_submits_sort_order_display = 'desc';
        $total_submits_column_class = 'sortable';
        $author_sort_order = 'asc';
        $author_sort_order_display = 'desc';
        $author_column_class = 'sortable';
        $start_date_sort_order = 'asc';
        $start_date_sort_order_display = 'desc';
        $start_date_column_class = 'sortable';
        $end_date_sort_order = 'asc';
        $end_date_sort_order_display = 'desc';
        $end_date_column_class = 'sortable';
        break;
    }
}
?>
<div id="yop-main-area" class="bootstrap-yop wrap">
    <div id="icon-options-general" class="icon32"></div>
    <h1>
        <?php esc_html_e( 'All Polls', 'yop-poll' ); ?>
		<a href="<?php echo esc_url( add_query_arg(
            array(
                'page' => 'yop-poll-add-poll',
                'action' => false,
                'poll_id' => false,
                '_token' => false,
                'order_by' => false,
                'sort_order' => false,
                'q' => false
             ) ) );?>" class="page-title-action">
			<?php esc_html_e( 'Add New', 'yop-poll' ); ?>
		</a>
	</h1>
    <ul class="subsubsub">
		<li class="all">
			<a href="#" class="current">
				<?php esc_html_e( 'All', 'yop-poll' ); ?>
				<span class="count">
					(<?php echo wp_kses_post( count( $polls) ); ?>)
				</span>
			</a> |
		</li>
		<li class="publish">
			<a href="#">
				<?php esc_html_e( 'Published', 'yop-poll' ); ?>
				<span class="count">
					(<?php echo wp_kses_post( $statistics['published'] ); ?>)
				</span>
			</a> |
		</li>
		<li class="draft">
			<a href="#">
				<?php esc_html_e( 'Draft', 'yop-poll' ); ?>
				<span class="count">
					(<?php echo wp_kses_post( $statistics['draft'] ); ?>)
				</span>
			</a> |
		</li>
		<li class="draft">
			<a href="#">
				<?php esc_html_e( 'Ending Soon', 'yop-poll' ); ?>
				<span class="count">
					(<?php echo wp_kses_post( $statistics['ending-soon'] ); ?>)
				</span>
			</a> |
		</li>
		<li class="draft">
			<a href="#">
				<?php esc_html_e( 'Ended', 'yop-poll' ); ?>
				<span class="count">
					(<?php echo wp_kses_post( $statistics['ended'] ); ?>)
				</span>
			</a>
		</li>
	</ul>
	<form method="get">
		<input type="hidden" name="_token" value="<?php echo esc_attr( wp_create_nonce( 'yop-poll-view-polls' ) ); ?>">
	    <p class="search-box">
			<label class="screen-reader-text" for="post-search-input">
				<?php esc_html_e( 'Search Polls', 'yop-poll' ); ?>:
			</label>
            <input type="hidden" name="page" value="yop-polls">
			<input id="poll-search-input" name="q" value="" type="search">
			<input id="search-submit" class="button" value="<?php esc_html_e( 'Search Polls', 'yop-poll' ); ?>" type="submit">
	    </p>
	</form>
    <div class="tablenav top">
		<div class="alignleft actions bulkactions">
            <input type="hidden" name="_bulk_token" value="<?php echo esc_attr( wp_create_nonce( 'yop-poll-bulk-polls' ) ); ?>">
			<label for="bulk-action-selector-top" class="screen-reader-text">
				<?php esc_html_e( 'Select bulk action', 'yop-poll' ); ?>
			</label>
			<select name="action" class="bulk-action-top admin-select">
				<option value="-1" class="hide-if-no-js">
					<?php esc_html_e( 'Bulk Actions', 'yop-poll' ); ?>
				</option>
				<option value="trash" class="hide-if-no-js">
					<?php esc_html_e( 'Move to Trash', 'yop-poll' ); ?>
				</option>
                <option value="clone" class="hide-if-no-js">
					<?php esc_html_e( 'Clone', 'yop-poll' ); ?>
				</option>
                <option value="reset-votes" class="hide-if-no-js">
					<?php esc_html_e( 'Reset Votes', 'yop-poll' ); ?>
				</option>
			</select>
			<input class="button bulk-action" data-position="top" value="<?php esc_html_e( 'Apply', 'yop-poll' ); ?>" type="submit">
		</div>
        <h2 class="screen-reader-text">
            <?php esc_html_e( 'Pages list navigation', 'yop-poll' ); ?>
        </h2>
		<div class="tablenav-pages">
            <form method="get" style="float: left; padding-right: 20px;">
                <input type="hidden" name="_token" value="<?php echo esc_attr( wp_create_nonce( 'yop-poll-view-polls' ) ); ?>">
                <input type="hidden" name="page" value="yop-polls">
                <input type="text" name="perpage" value="<?php echo isset( $_REQUEST['perpage'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_REQUEST['perpage'] ) ) ) : 10; ?>" style="max-width: 50px;"> <?php esc_html_e( 'items', 'yop-poll' ); ?> / <?php esc_html_e( 'page', 'yop-poll' ); ?>
                <button class="button"><?php esc_html_e( 'Set', 'yop-poll' ); ?></button>
            </form>
			<span class="displaying-num">
				<?php echo sprintf( _n( '%s item', '%s items', $total_polls, 'yop-poll' ), $total_polls ); ?>
			</span>
            <?php
            if ( 1 < $total_pages ) {
            ?>
            <span class="pagination-links">
                <?php echo wp_kses_post( $pagination['first_page'] ); ?>
                <?php echo wp_kses_post( $pagination['previous_page'] ); ?>
                <span class="paging-input">
                    <label for="current-page-selector" class="screen-reader-text">
                        <? esc_html_e( 'Current Page', 'yop-poll' ); ?>
                    </label>
                    <input class="current-page"
                        id="current-poll-page-selector"
                        type="text"
                        name="page_no"
                        value="<?php echo esc_attr( $params['page_no'] ); ?>"
                        size="1"
                        aria-describedby="table-paging">
                    <span class="tablenav-paging-text"> of
                        <span class="total-pages">
                            <?php echo wp_kses_post( $total_pages ); ?>
                        </span>
                    </span>
                </span>
                <?php echo wp_kses_post( $pagination['next_page'] ); ?>
                <?php echo wp_kses_post( $pagination['last_page'] ); ?>
            </span>
            <?php
            }
            ?>
		</div>
		<br class="clear">
	</div>
	<table class="wp-list-table yop-table widefat striped pages ">
		<thead>
			<tr>
				<td id="cb" class="manage-column column-cb check-column">
					<label class="screen-reader-text" for="cb-select-all-1">
						<?php esc_html_e( 'Select All', 'yop-poll' ); ?>
					</label>
					<input id="cb-select-all-1" type="checkbox">
				</td>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $name_column_class ) . ' ' . esc_attr( $name_sort_order_display ); ?>">
					<a href="
                        <?php echo esc_url(
                                add_query_arg(
                                    array(
                                        'action' => false,
                                        'poll_id' => false,
                                        '_token' => false,
                                        'order_by' => 'name',
                                        'sort_order' => $name_sort_order,
                                        'q' => htmlentities( $params['q'] ),
                                        'page_no' => $params['page_no']
                                    )
                                )
                            );
                            ?>
                        ">
						<span>
							<?php esc_html_e( 'Title', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary sorted">
					<span>
						<?php esc_html_e( 'Results', 'yop-poll' ); ?>
					</span>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $status_column_class ) . ' ' . esc_attr( $status_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'status',
                                    'sort_order' => $status_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'Status', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary sortable">
					<span>
						<?php esc_html_e( 'Code', 'yop-poll' ); ?>
					</span>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $total_submits_column_class ) . ' ' . esc_attr( $total_submits_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'votes',
                                    'sort_order' => $total_submits_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'Votes', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $author_column_class ) . ' ' . esc_attr( $author_sort_order_display ); ?>">
                    <a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'votes',
                                    'sort_order' => $author_sort_order
                                )
                            )
                        );
                    ?>
                    ">
						<span>
							<?php esc_html_e( 'Author', 'yop-poll' );?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $start_date_column_class ) . ' ' . esc_attr( $start_date_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'sdate',
                                    'sort_order' => $start_date_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'Start Date', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $end_date_column_class ) . ' ' . esc_attr( $end_date_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'edate',
                                    'sort_order' => $end_date_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'End Date', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
			</tr>
		</thead>
		<?php
		foreach ( $polls as $poll ) {
			$poll_meta_data = unserialize( $poll['meta_data'] );
            switch ( $poll['status'] ) {
                case 'published': {
                    $status_class = 'published';
                    break;
                }
                case 'draft': {
                    $status_class = 'draft';
                    break;
                }
                case 'archived': {
                    $status_class = 'archived';
                    break;
                }
                case 'ended': {
                    $status_class = 'ended';
                    break;
                }
                case 'ending soon': {
                    $status_class = 'endsoon';
                    break;
                }
            }
		?>
        <tr  class="iedit author-self level-0 post-17 type-post status-publish format-standard hentry category-uncategorized">
			<th scope="row" class="check-column">
				<label class="screen-reader-text" for="cb-select-17">
					<?php esc_html_e( 'Select', 'yop-poll' ); ?>
				</label>
				<input name="polls[]" value="<?php echo esc_attr( $poll['id'] ); ?>" type="checkbox">
				<div class="locked-indicator"></div>
			</th>
			<td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
				<strong>
					<a class="row-title" href="<?php echo esc_url( add_query_arg(
                        array(
                            'page' => 'yop-polls',
                            'action' => 'edit',
                            'poll_id' => $poll['id'],
                            '_token' => false,
                            'order_by' => false,
                            'sort_order' => false,
                            'q' => false
                         )
                        ))?>"
                        title="<?php esc_html_e( 'Poll name', 'yop-poll' ); ?>">
						<?php echo esc_html( $poll['name'] ); ?>
					</a>
				</strong>
				<div class="row-actions">
					<span class="edit">
						<a href="<?php echo esc_url( add_query_arg(
                            array(
                                'page' => 'yop-polls',
                                'action' => 'edit',
                                'poll_id' => $poll['id'],
                                '_token' => false,
                                'order_by' => false,
                                'sort_order' => false,
                                'q' => false
                             ) ) );?>" title="<?php esc_html_e( 'Edit this poll', 'yop-poll' ); ?>">
							<?php esc_html_e( 'Edit', 'yop-poll' ); ?>
						</a> |
					</span>
					<span class="trash">
						<a class="delete-poll" title="<?php esc_html_e( 'Move this poll to the Trash', 'yop-poll' ); ?>"
                            href="#"
                            data-id="<?php echo esc_attr( $poll['id'] ); ?>">
							<?php esc_html_e( 'Trash', 'yop-poll' ); ?>
						</a> |
					</span>
					<span class="view">
						<a href="#" class="clone-poll" title="<?php esc_html_e( 'Clone', 'yop-poll' ); ?>"
                            data-id="<?php echo esc_attr( $poll['id'] ); ?>"
                            rel="permalink">
							<?php esc_html_e( 'Clone', 'yop-poll' ); ?>
						</a>
					</span>
				</div>
			</td>
			<td class="author">
                <a href="<?php echo esc_url( add_query_arg(
                    array(
                        'page' => 'yop-polls',
                        'action' => 'results',
                        'poll_id' => $poll['id'],
                        '_token' => false,
                        'order_by' => false,
                        'sort_order' => false,
                        'q' => false
                    ) ) );?>" title="<?php esc_html_e( 'View Results', 'yop-poll' ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                    </svg>
                </a>
			</td>
			<td class="author">
				<label class="status-<?php echo esc_attr( $status_class ); ?>">
					<?php echo esc_html( ucwords( $poll['status'] ) ); ?>
				</label>
			</td>
			<td class="author">
                <a href="#" class="get-poll-code" data-id="<?php echo esc_attr( $poll['id'] ); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-code-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
                </svg>
                </a>
			</td>
			<td class="author">
				<?php echo esc_html( $poll['total_submits'] ); ?>
			</td>
			<td class="author">
				<?php echo esc_html( $poll['author'] ); ?>
			</td>
			<td class="author">
				<?php
				if ( 'now' === $poll_meta_data['options']['poll']['startDateOption'] ) {
					echo esc_html( date( $date_format . ' ' . $time_format, strtotime( $poll['added_date'] ) ) );
				} else {
					echo esc_html( date( $date_format . ' ' . $time_format, strtotime( $poll_meta_data['options']['poll']['startDateCustom'] ) ) );
				}
				?>
			</td>
			<td class="author">
				<?php
				if ( 'never' === $poll_meta_data['options']['poll']['endDateOption'] ) {
					esc_html_e( 'Never', 'yop-poll' );
				} else {
					echo esc_html( date( $date_format . ' ' . $time_format, strtotime( $poll_meta_data['options']['poll']['endDateCustom'] ) ) );
				}
				?>
			</td>
		</tr>
		<?php
		}
		?>
		<thead>
            <tr>
				<td id="cb" class="manage-column column-cb check-column">
					<label class="screen-reader-text" for="cb-select-all-1">
						<?php esc_html_e( 'Select All', 'yop-poll' ); ?>
					</label>
					<input id="cb-select-all-1" type="checkbox">
				</td>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $name_column_class ) . ' ' . esc_attr( $name_sort_order_display ); ?>">
					<a href="
                        <?php echo esc_url(
                                add_query_arg(
                                    array(
                                        'action' => false,
                                        'poll_id' => false,
                                        '_token' => false,
                                        'order_by' => 'name',
                                        'sort_order' => $name_sort_order
                                    )
                                )
                            );
                            ?>
                        ">
						<span>
							<?php esc_html_e( 'Title', 'yop-poll' );?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary sorted">
					<span>
						<?php esc_html_e( 'Results', 'yop-poll' );?>
					</span>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $status_column_class ) . ' ' . esc_attr( $status_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'status',
                                    'sort_order' => $status_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'Status', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary sortable">
					<span>
						<?php esc_html_e( 'Code', 'yop-poll' ); ?>
					</span>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $total_submits_column_class ) . ' ' . esc_attr( $total_submits_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'votes',
                                    'sort_order' => $total_submits_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'Votes', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $author_column_class ) . ' ' . esc_attr( $author_sort_order_display ); ?>">
                    <a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'votes',
                                    'sort_order' => $author_sort_order
                                )
                            )
                        );
                    ?>
                    ">
						<span>
							<?php esc_html_e( 'Author', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $start_date_column_class ) . ' ' . esc_attr( $start_date_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'sdate',
                                    'sort_order' => $start_date_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'Start Date', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
				<th scope="col" class="manage-column column-title column-primary <?php echo esc_attr( $end_date_column_class ) . ' ' . esc_attr( $end_date_sort_order_display ); ?>">
					<a href="
                    <?php echo esc_url(
                            add_query_arg(
                                array(
                                    'action' => false,
                                    'poll_id' => false,
                                    '_token' => false,
                                    'order_by' => 'edate',
                                    'sort_order' => $end_date_sort_order
                                )
                            )
                        );
                        ?>
                    ">
						<span>
							<?php esc_html_e( 'End Date', 'yop-poll' ); ?>
						</span>
						<span class="sorting-indicator"></span>
					</a>
				</th>
			</tr>
	  </thead>
	</table>
	<div class="tablenav top">
		<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-bottom" class="screen-reader-text">
				<?php esc_html_e( 'Select bulk action', 'yop-poll' ); ?>
			</label>
			<select name="action" class="bulk-action-bottom admin-select">
                <option value="-1" class="hide-if-no-js">
					<?php esc_html_e( 'Bulk Actions', 'yop-poll' ); ?>
				</option>
				<option value="trash" class="hide-if-no-js">
					<?php esc_html_e( 'Move to Trash', 'yop-poll' ); ?>
				</option>
                <option value="clone" class="hide-if-no-js">
					<?php esc_html_e( 'Clone', 'yop-poll' ); ?>
				</option>
                <option value="reset-votes" class="hide-if-no-js">
					<?php esc_html_e( 'Reset Votes', 'yop-poll' ); ?>
				</option>
			</select>
			<input class="button bulk-action" data-position="bottom" value="<?php esc_html_e( 'Apply', 'yop-poll' ); ?>" type="submit">
		</div>
        <h2 class="screen-reader-text">
            <?php esc_html_e( 'Pages list navigation', 'yop-poll' ); ?>
        </h2>
		<div class="tablenav-pages">
			<span class="displaying-num">
				<?php echo sprintf( _n( '%s item', '%s items', $total_polls, 'yop-poll' ), $total_polls ); ?>
			</span>
            <?php
            if ( 1 < $total_pages ) {
            ?>
            <span class="pagination-links">
                <?php echo wp_kses_post( $pagination['first_page'] ); ?>
                <?php echo wp_kses_post( $pagination['previous_page'] ); ?>
                <span class="paging-input">
                    <label for="current-page-selector" class="screen-reader-text">
                        <? esc_html_e( 'Current Page', 'yop-poll' ); ?>
                    </label>
                    <span class="tablenav-paging-text">
                        <?php echo esc_html( $params['page_no'] ); ?> of
                        <span class="total-pages">
                            <?php echo wp_kses_post( $total_pages ); ?>
                        </span>
                    </span>
                </span>
                <?php echo wp_kses_post( $pagination['next_page'] ); ?>
                <?php echo wp_kses_post( $pagination['last_page'] ); ?>
            </span>
            <?php
            }
            ?>
		</div>
		<br class="clear">
	</div>
</div>
<div class="bootstrap-yop">
    <div id="shortcode-popup" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?php esc_html_e( 'Generate Poll Shortcode', 'yop-poll' ); ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">
                        <?php esc_html_e( 'Place the shortcode on your pages or posts to display the poll:', 'yop-poll' ); ?>
                    </h4>
                    <br/>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input type="text" class="form-control poll-code" id="yop-poll-shortcode" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary" type="button" id="copy-yop-poll-code" data-clipboard-target="#yop-poll-shortcode"><?php esc_html_e( 'Copy to Clipboard', 'yop-poll' ); ?></button>
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="form-horizontal">
                        <h4 class="text-center">
                            <?php esc_html_e( 'To customize it, you can use the options below', 'yop-poll' ); ?>
                        </h4>
                        <br/>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                <?php esc_html_e( 'Tracking Id', 'yop-poll' ); ?>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control shortcode-tracking-id" placeholder="<?php esc_html_e( 'Leave empty if none', 'yop-poll' ); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                <?php esc_html_e( 'Display Results Only', 'yop-poll' ); ?>
                            </label>
                            <div class="col-md-8">
                                <select class="shortcode-show-results admin-select" style="width:100%">
                                    <option value="yes"><?php esc_html_e( 'Yes', 'yop-poll' ); ?></option>
                                    <option value="no" selected><?php esc_html_e( 'No', 'yop-poll' ); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary generate-yop-poll-code" type="button" data-id="">
                                    <?php esc_html_e( 'Generate Code', 'yop-poll' ); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <?php
    if ( 'yes' === $show_guide ) {
    ?>
    <div id="yop-poll-guide-modal" class="modal fade" role="dialog" style="margin-top: 10px;" data-backdrop="static">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px!important;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php
                    include( YOP_POLL_PATH . 'admin/views/general/guide.php' );
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>

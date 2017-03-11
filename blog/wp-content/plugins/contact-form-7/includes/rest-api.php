<?php

add_action( 'rest_api_init', 'wpcf7_rest_api_init' );

function wpcf7_rest_api_init() {
	register_rest_route( 'contact-form-7/v1',
		'/contact-forms',
		array(
			'methods' => 'GET',
			'callback' => 'wpcf7_rest_get_contact_forms' ) );

	register_rest_route( 'contact-form-7/v1',
		'/contact-forms/(?P<id>\d+)',
		array(
			'methods' => 'GET',
			'callback' => 'wpcf7_rest_get_contact_form' ) );
}

function wpcf7_rest_get_contact_forms( WP_REST_Request $request ) {
	if ( ! current_user_can( 'wpcf7_read_contact_forms' ) ) {
		return new WP_Error( 'wpcf7_forbidden',
			__( "You are not allowed to access contact forms.", 'contact-form-7' ),
			array( 'status' => 403 ) );
	}

	$args = array();

	$per_page = $request->get_param( 'per_page' );

	if ( null !== $per_page ) {
		$args['posts_per_page'] = (int) $per_page;
	}

	$offset = $request->get_param( 'offset' );

	if ( null !== $offset ) {
		$args['offset'] = (int) $offset;
	}

	$order = $request->get_param( 'order' );

	if ( null !== $order ) {
		$args['order'] = (string) $order;
	}

	$orderby = $request->get_param( 'orderby' );

	if ( null !== $orderby ) {
		$args['orderby'] = (string) $orderby;
	}

	$search = $request->get_param( 'search' );

	if ( null !== $search ) {
		$args['s'] = (string) $search;
	}

	$items = WPCF7_ContactForm::find( $args );

	$response = array();

	foreach ( $items as $item ) {
		$response[] = array(
			'id' => $item->id(),
			'slug' => $item->name(),
			'title' => $item->title(),
			'locale' => $item->locale() );
	}

	return rest_ensure_response( $response );
}

function wpcf7_rest_get_contact_form( WP_REST_Request $request ) {
	$id = (int) $request->get_param( 'id' );
	$item = wpcf7_contact_form( $id );

	if ( ! $item ) {
		return new WP_Error( 'wpcf7_not_found',
			__( "The requested contact form was not found.", 'contact-form-7' ),
			array( 'status' => 404 ) );
	}

	if ( ! current_user_can( 'wpcf7_edit_contact_form', $id ) ) {
		return new WP_Error( 'wpcf7_forbidden',
			__( "You are not allowed to access the requested contact form.", 'contact-form-7' ),
			array( 'status' => 403 ) );
	}

	$response = array(
		'id' => $item->id(),
		'slug' => $item->name(),
		'title' => $item->title(),
		'locale' => $item->locale(),
		'properties' => $item->get_properties() );

	return rest_ensure_response( $response );
}

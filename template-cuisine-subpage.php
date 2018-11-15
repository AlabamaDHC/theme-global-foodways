<?php
/**
 * Template Name: Cuisine Subpage Template
 * Description:
 */

$context = Timber::get_context();
$post = new TimberPost();

$context['post'] = $post;
$context['id'] = $post.id;

$context["page_header_title"] = $post->parent->title;
$context["page_header_link"] = $post->parent->link;


$signature_dishes_icon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 380.721 380.722" style="enable-background:new 0 0 380.721 380.722;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M129.194,195.246c0.25-4.072,0.5-8.15,1.034-12.269c0.987-9.766,3.108-19.572,5.275-29.111    c1.319-4.758,2.748-9.458,4.247-14.053c1.917-4.485,3.793-8.946,5.664-13.303c4.235-8.505,8.97-16.452,14.622-23.104    c1.342-1.714,2.672-3.375,3.974-5.042c1.487-1.487,2.975-2.928,4.409-4.369c3.027-2.736,5.652-5.699,8.674-7.872    c6.023-4.461,11.352-8.702,16.777-11.328c5.229-2.917,9.713-5.449,13.756-6.878c7.924-3.189,12.421-4.792,12.421-4.792    s-3.835,3.044-10.538,7.982c-3.463,2.26-7.134,5.827-11.503,9.481c-4.555,3.485-8.679,8.481-13.582,13.269    c-2.452,2.446-4.356,5.519-6.675,8.348c-1.127,1.441-2.283,2.893-3.475,4.369c-0.964,1.627-1.963,3.259-2.974,4.926    c-4.328,6.414-7.563,13.943-10.934,21.582c-1.383,3.997-2.782,8.052-4.212,12.147c-0.976,4.258-2.056,8.562-3.235,12.85    c-1.772,8.812-3.509,17.8-4.259,27.042c-0.522,3.352-0.772,6.733-1.086,10.137c73.436,0.012,130.274,0.058,209.805,0.058    c0.267-3.486,0.418-7.018,0.418-10.567c0-66.981-48.811-122.147-111.621-129.455c4.055-3.793,6.623-9.173,6.623-15.157    c0.023-11.502-9.295-20.809-20.774-20.809c-11.491,0-20.82,9.307-20.82,20.809c0,5.996,2.556,11.363,6.622,15.157    c-62.805,7.308-111.603,62.474-111.603,129.455c0,3.538,0.127,7.023,0.389,10.498    C114.369,195.246,121.857,195.246,129.194,195.246z" fill="rgb(51, 51, 51)"/>
                            <rect x="83.329" y="202.995" width="297.392" height="26.236" fill="rgb(51, 51, 51)"/>
                            <path d="M258.631,247.855c-15.115,7.343-67.818,26.351-67.818,26.351l-62.299-3.903c0,0,35.635-9.911,49.449-13.013    c13.838-3.091,7.819-18.694,0.168-18.694c-7.65,0-74.324,2.753-74.324,2.753L59.534,257.29l11.717,74.162    c0,0,9.115-15.604,18.207-15.604c9.126,0,88.174,2.103,98.904,0c10.736-2.127,76.126-46.859,83.957-52.076    C280.115,258.579,273.805,240.501,258.631,247.855z" fill="rgb(51, 51, 51)"/>
                            <polygon points="0,265.261 0,361.394 67.83,348.694 50.861,256.313   " fill="rgb(51, 51, 51)"/>
                        </g>
                    </g>
                </svg>';

$where_to_get_it_icon = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 495 495" style="enable-background:new 0 0 495 495;" xml:space="preserve" width="65px" height="65px">
                    <g>
                        <polygon style="fill:#FFCD00;" points="330,448.08 495,495 495,345.64 330,298.72 	"/>
                        <path style="fill:#FFDA44;" d="M397.019,208.32L330,292.581v6.139l165,46.92V196.28l-81.459-23.164
                            C410.815,185.892,405.177,198.004,397.019,208.32z"/>
                        <path style="fill:#FFCD00;" d="M330,0v70c47.094,0,85.415,38.313,85.415,85.415c0,5.967-0.637,11.902-1.874,17.701L495,196.28
                            V46.92L330,0z"/>
                        <polygon style="fill:#FFDA44;" points="164.99,345.64 164.99,495 330,448.08 330,298.72 	"/>
                        <path style="fill:#FFE477;" d="M246.46,173.114l-81.47,23.166v149.36L330,298.72v-6.139l-66.987-84.221
                            C254.833,198.016,249.187,185.894,246.46,173.114z"/>
                        <path style="fill:#FFDA44;" d="M246.46,173.114c-1.238-5.799-1.875-11.734-1.875-17.699C244.585,108.313,282.898,70,330,70V0
                            L164.99,46.92v149.36L246.46,173.114z"/>
                        <polygon style="fill:#FFCD00;" points="0,298.72 0,448.08 164.99,495 164.99,345.64 	"/>
                        <polygon style="fill:#FFDA44;" points="164.99,196.28 0,149.36 0,298.72 164.99,345.64 	"/>
                        <polygon style="fill:#FFCD00;" points="164.99,46.92 0,0 0,149.36 164.99,196.28 	"/>
                        <path style="fill:#CD2A00;" d="M361.842,155.415c0,17.553-14.289,31.842-31.842,31.842v105.324l67.019-84.261
                            c8.158-10.315,13.797-22.427,16.522-35.204c1.237-5.799,1.874-11.734,1.874-17.701C415.415,108.313,377.094,70,330,70v53.573
                            C347.553,123.573,361.842,137.854,361.842,155.415z"/>
                        <path style="fill:#D8D7DA;" d="M361.842,155.415c0-17.561-14.289-31.842-31.842-31.842v63.683
                            C347.553,187.257,361.842,172.968,361.842,155.415z"/>
                        <path style="fill:#FF3501;" d="M244.585,155.415c0,5.966,0.637,11.9,1.875,17.699c2.728,12.78,8.373,24.902,16.554,35.245
                            L330,292.581V187.257c-17.561,0-31.842-14.289-31.842-31.842c0-17.561,14.281-31.842,31.842-31.842V70
                            C282.898,70,244.585,108.313,244.585,155.415z"/>
                        <path style="fill:#FFFFFF;" d="M330,123.573c-17.561,0-31.842,14.281-31.842,31.842c0,17.553,14.281,31.842,31.842,31.842V123.573z
                            "/>
                    </g>
                </svg>';

$ingredients_icon = '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"  width="65px" height="65px">
                    <path style="fill:#64DD17;" d="M343.579,229.68l101.187-101.187c12.067-12.067,31.624-12.075,43.682-0.018l0,0
                        c12.057,12.057,12.05,31.614-0.018,43.682L387.243,273.344c-12.067,12.067-31.624,12.075-43.682,0.018l0,0
                        C331.504,261.304,331.512,241.747,343.579,229.68z"/>
                    <circle style="fill:#FF3D00;" cx="256" cy="154.9" r="76"/>
                    <path style="fill:#3E2723;" d="M263.5,90.7h-15c-0.055-16.27-13.23-29.445-29.5-29.5v-15C243.554,46.255,263.445,66.146,263.5,90.7z
                        "/>
                    <rect x="361.793" y="165.735" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 784.3051 74.1607)" style="fill:#1B5E20;" width="30" height="67.56"/>
                    <path style="fill:#00C853;" d="M357.7,109.7c-23.097-15.927-54.732-10.114-70.659,12.983c-11.957,17.34-11.973,40.26-0.041,57.617
                        c-13.861,20.695-8.322,48.708,12.373,62.569c20.695,13.861,48.708,8.322,62.569-12.373c8.147-12.163,9.883-27.522,4.658-41.197
                        c23.254,8.926,49.341-2.689,58.267-25.943c8.926-23.254-2.689-49.341-25.943-58.267C385.25,99.842,369.878,101.56,357.7,109.7z"/>
                    <path style="fill:#FFC400;" d="M225.9,168.8c-25.621-25.547-39.738-60.424-39.1-96.6h-37
                        c-26.553,68.842,7.729,146.175,76.57,172.728c30.966,11.944,65.27,11.934,96.23-0.028v-37
                        C286.39,208.566,251.471,194.447,225.9,168.8z"/>
                    <circle style="fill:#FF6D00;" cx="104.375" cy="205.73" r="76"/>
                    <path style="fill:#00C853;" d="M224.594,152.022L224.594,152.022L224.594,152.022L224.594,152.022
                        c-18.355,18.355-48.114,18.355-66.468,0l0,0l0,0l0,0C176.481,133.667,206.24,133.667,224.594,152.022z"/>
                    <path style="fill:#3E2723;" d="M155.2,165.6L144.6,155c11.519-11.553,11.519-30.247,0-41.8l10.6-10.6
                        c17.539,17.295,17.991,45.276,0.696,62.815C155.749,165.564,155.602,165.711,155.2,165.6z"/>
                    <rect id="SVGCleanerId_0" y="207.5" style="fill:#F57C00;" width="512" height="304.5"/>
                    <g>
                        <rect id="SVGCleanerId_0_1_" y="207.5" style="fill:#F57C00;" width="512" height="304.5"/>
                    </g>
                    <rect x="33" y="207.5" style="fill:#FFA726;" width="126" height="304.5"/>
                    <g>
                        <rect x="353" y="207.5" style="fill:#FF9100;" width="126" height="304.5"/>
                        <rect x="159" y="207.5" style="fill:#FF9100;" width="97" height="304.5"/>
                    </g>
                    <rect y="207.5" style="fill:#FFB74D;" width="512" height="145.5"/>
                    <polygon style="fill:#FFCC80;" points="118.4,512 296.6,512 511.8,296.8 422.7,207.7 "/>
                    <g>
                        <circle style="fill:#5D4037;" cx="413.1" cy="292.8" r="20.1"/>
                        <circle style="fill:#5D4037;" cx="98.9" cy="292.8" r="20.1"/>
                    </g>
                </svg>';

if($post->title == 'Signature Dishes'){
	$context["page_icon"] = $signature_dishes_icon;
}
elseif ($post->title == 'Where to get it?'){
	$context["page_icon"] = $where_to_get_it_icon;
}
elseif ($post->title == 'Learn More'){
	$context["page_icon"] = $ingredients_icon;
}
else {
	$context["page_icon"] = "";
}

$args = array(
    'post_type' => 'post',
    'category_name' => 'Where to get it?'
);



$args2 = array(
    'post_type' => 'post',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => array( $post->slug )
        ),
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => array( $post->parent->slug )
        )
    )
);


$context['posts'] = Timber::get_posts( $args2 );

Timber::render('template-cuisine-subpage.twig', $context );

<?php



function highlight_word( $content, $word, $color ) {
    $replace = '<span style="background-color: ' . $color . ';">' . $word . '</span>'; // create replacement
    $content = str_ireplace( $word, $replace, $content ); // replace content

    return $content; // return highlighted data
}


function highlight_words( $content, $words) {
	// colors to use
		$colors = array(
		    '#88ccff',
		    '#cc88ff'
		);

    $color_index = 0; // index of color (assuming it's an array)


    // loop through words
    foreach( $words as $word ) {
        $content = highlight_word( $content, $word, $colors[$color_index] ); // highlight word
        $color_index = ( $color_index + 1 ) % count( $colors ); // get next color index
    }

    return $content; // return highlighted data
}


function getRankOfCurrentUser()
{
    $profiles =  App\Profile::orderBy('points', 'DESC')->get();
    
    $c = count($profiles);
    $i = 0;
    foreach ($profiles as $key => $p) {
         if($p->user_id === \Auth::user()->id)
         {
            return $i+1;  
         }
         $i++;
     } 
     return 0;
    
}
function getRankOfGivenUser($id)
{
  $profiles =  App\Profile::orderBy('points', 'DESC')->get();
    
    $c = count($profiles);
    $i = 0;
    foreach ($profiles as $key => $p) {
         if($p->user_id === $id)
         {
            return $i+1;  
         }
         $i++;
     } 
     return 0;
}
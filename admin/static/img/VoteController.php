<?php /**
 *
 */
class VoteController extends BaseController
{

  public function index(){
      // $vote_model = $this->loadModel('vote');
      // save data for view
      // $this->data('players', $vote_model->getAll() );
      $this->view('vote','wallheader','wallfooter');
  }


}

?>

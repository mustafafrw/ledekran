<?php


class Auth extends CI_controller
{
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect('auth/login','refresh');
    }

    public function login()
   {
        
            //veri tabanındaki kulllanıcıyı kontrol et
            if(isset($_POST['username'])){
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                
                
                $this->db->select('*');
                $this->db->from('user');
                $this->db->where(array('username'=>$username,'password'=>$password));
                $query = $this->db->get();
               
                $user=$query->row();
                print_r($user);
                //eğer kullanıcı çıkarsa
                if($user->username){
                    //geçici mesaj
                    $this->session->set_flashdata("success","You are logged in");
                    //oturum değişkenini ayarla
                    $_SESSION['user_logged']=TRUE;
                    $_SESSION['username']=$user->username;
                    //profile yönlendir
                    redirect("admin","refresh");
                }else{
                    $this->session->set_flashdata("error","NO such account exists in database.");
                    redirect("/admin/auth/login","refresh");
                }
                }
                
            $this->load->view('admin/login/index');
    }
}

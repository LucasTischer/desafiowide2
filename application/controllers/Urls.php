<?php
    class Urls extends CI_controller{
        
        public function atualiza_urls(){
            
            $this->load->model('Url');
            
            $urls = $this->Url->get_urls();

            foreach ($urls as $data){
                
                $url = $data->url;

                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_NOBODY, false);
                
                $retorno = curl_exec($ch);
                $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
   
                $date = date('Y-m-d H:i:s');
                if($http >= 400){
                    $status = 'sem sucesso'; 
                }
                else{
                    $status = 'atualizado';
                }
                $retornos_url = array(
                    'status'  => "$status",
                    'retorno'  => $retorno, 
                    'status_code' => $http,
                    'updated_at' => $date
                );

                $id = $data->id;

                $this->Url->update_url($id, $retornos_url);
            }
        }

    }

?>    
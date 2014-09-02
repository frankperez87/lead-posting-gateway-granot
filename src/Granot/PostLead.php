<?php namespace Granot;

class PostLead {
    
    protected $account, $lead, $guzzle;

    private $url;

    public function __construct(Account $account, Lead $lead) {
        $this->account = $account;
        $this->lead = $lead;
        $this->guzzle = new \GuzzleHttp\Client();
        $this->url = 'http://gmove.granot.com/bin/wc.dll?lidgw~LEADSGWHTTP~&API_ID=' . $account->getApiId() . '&MOVERREF=' . $account->getMoverRef();
    }

    public function getUrl() {
        return $this->url;
    }

    public function submit() {

        $data = $this->lead->getData();    
        $url = $this->getUrl();

        $response = $this->guzzle->post($url, [
            'body' => $this->lead->getData()
        ]);

        $result = $response->getBody();
        $result = explode(',', $result);

        return $this->parseResponse($result);

    }

    public function parseResponse(array $response_data) {

       $response['lead_id'] = $response_data[0]; 
       $response['error_id'] = $response_data[1]; 
       $response['error_message'] = $response_data[2]; 
       $response['sold'] = $response_data[3]; 
       $response['match'] = $response_data[4]; 

       return $response;
    }

}

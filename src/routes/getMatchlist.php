<?php
$app->post('/api/LeagueOfLegends/getMatchlist', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'region', 'accountId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = 'https://' . $post_data['args']['region'] . $settings['api_url'] . "lol/match/v3/matchlists/by-account/" . $post_data['args']['accountId'];
    $body = array();
    $body['api_key'] = $post_data['args']['apiKey'];
    if (isset($post_data['args']['queue']) && strlen($post_data['args']['queue']) > 0) {
        $body['queue'] = $post_data['args']['queue'];
    }
    if (isset($post_data['args']['beginTime']) && strlen($post_data['args']['beginTime']) > 0) {
        $body['beginTime'] = $post_data['args']['beginTime'];
    }
    if (isset($post_data['args']['endIndex']) && strlen($post_data['args']['endIndex']) > 0) {
        $body['endIndex'] = $post_data['args']['endIndex'];
    }
    if (isset($post_data['args']['season']) && strlen($post_data['args']['season']) > 0) {
        $body['season'] = $post_data['args']['season'];
    }
    if (isset($post_data['args']['champion']) && strlen($post_data['args']['champion']) > 0) {
        $body['champion'] = $post_data['args']['champion'];
    }
    if (isset($post_data['args']['beginIndex']) && strlen($post_data['args']['beginIndex']) > 0) {
        $body['beginIndex'] = $post_data['args']['beginIndex'];
    }
    if (isset($post_data['args']['endTime']) && strlen($post_data['args']['endTime']) > 0) {
        $body['endTime'] = $post_data['args']['endTime'];
    }

    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->request('GET', $query_str, [
            'query' => $body
        ]);

        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());

        $all_data[] = $rawBody;
        if ($response->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getReasonPhrase();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $responseBody;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
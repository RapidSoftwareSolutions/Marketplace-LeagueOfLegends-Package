<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class LeagueOfLegendsTest extends BaseTestCase {

    public function testListMetrics() {

        $routes = [
            'getLobbyEventsByCode',
            'getTournamentCode',
            'getMockLobbyEventsByCode',
            'getBySummonerId',
            'getBySummonerName',
            'getByAccountId',
            'getVersions',
            'getSummonerSpellById',
            'getSummonerSpellList',
            'getRuneById',
            'getRuneList',
            'getRealm',
            'getProfileIcons',
            'getMasteryById',
            'getMasteryList',
            'getMapData',
            'getLanguages',
            'getLanguageStrings',
            'getItemById',
            'getItemList',
            'getChampionDataById',
            'getChampionList',
            'getFeaturedGames',
            'getCurrentGameInfoBySummoner',
            'getRunePagesBySummonerId',
            'getMatchTimeline',
            'getRecentMatchlist',
            'getMatchlist',
            'getMatchByTournamentCode',
            'getMatch',
            'getMatchIdsByTournamentCode',
            'getMasteryPagesBySummonerId',
            'getShardData',
            'getAllLeaguePositionsForSummoner',
            'getMasterLeague',
            'getAllLeaguesForSummoner',
            'getChallengerLeague',
            'getMasterLeagues',
            'getChallengerLeagues',
            'getLeagueEntriesForSummonerIds',
            'getLeaguesForSummonerIds',
            'getChampionById',
            'getChampions',
            'getChampionMasteryScore',
            'getSingleChampionMastery',
            'getAllChampionMasteries'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/LeagueOfLegends/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}

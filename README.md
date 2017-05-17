[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/LeagueOfLegends/functions?utm_source=RapidAPIGitHub_LeagueOfLegendsFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# LeagueOfLegends Package
LeagueOfLegends
* Domain: [League of Legends](http://leagueoflegends.com)
* Credentials: apiKey

## How to get credentials: 
0. Go to [Riot Games Developer Website](https://developer.riotgames.com/)
1. Register or log in
2. Register an application to get production keys.

## LeagueOfLegends.getAllChampionMasteries
Get all champion mastery entries sorted by number of champion points descending

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Summoner ID associated with the player

## LeagueOfLegends.getSingleChampionMastery
Get a champion mastery by player ID and champion ID

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Summoner ID associated with the player
| championId| Number     | Champion ID to retrieve Champion Mastery for

## LeagueOfLegends.getChampionMasteryScore
Get a player's total champion mastery score, which is the sum of individual champion mastery levels.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Summoner ID associated with the player

## LeagueOfLegends.getChampions
Retrieve all champions

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against

## LeagueOfLegends.getChampionById
Retrieve champion by ID

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| championId| Number     | Id of the champion

## LeagueOfLegends.getLeaguesForSummonerIds
Get leagues mapped by summoner ID for a given list of summoner IDs.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Riot
| region     | String     | Region to execute against
| summonerIds| String     | Comma-separated list of summoner IDs. Maximum allowed at once is 10.

## LeagueOfLegends.getLeagueEntriesForSummonerIds
Get league entries mapped by summoner ID for a given list of summoner IDs.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Riot
| region     | String     | Region to execute against
| summonerIds| String     | Comma-separated list of summoner IDs. Maximum allowed at once is 10.

## LeagueOfLegends.getChallengerLeagues
Get challenger tier leagues.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against
| type  | String     | Game queue type. Values: RANKED_FLEX_SR, RANKED_FLEX_TT, RANKED_SOLO_5x5, RANKED_TEAM_5x5, RANKED_TEAM_3x3

## LeagueOfLegends.getMasterLeagues
Get master tier leagues.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against
| type  | String     | Game queue type. Values: RANKED_FLEX_SR, RANKED_FLEX_TT, RANKED_SOLO_5x5, RANKED_TEAM_5x5, RANKED_TEAM_3x3

## LeagueOfLegends.getChallengerLeague
Get the challenger league for a given queue.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against
| type  | String     | Game queue type. Values: RANKED_FLEX_SR, RANKED_FLEX_TT, RANKED_SOLO_5x5

## LeagueOfLegends.getAllLeaguesForSummoner
Get leagues in all queues for a given summoner ID

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Id of the summoner

## LeagueOfLegends.getMasterLeague
Get the master league for a given queue.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against
| type  | String     | Game queue type. Values: RANKED_FLEX_SR, RANKED_FLEX_TT, RANKED_SOLO_5x5

## LeagueOfLegends.getAllLeaguePositionsForSummoner
Get league positions in all queues for a given summoner ID.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Id of the summoner

## LeagueOfLegends.getShardData
Get League of Legends status for the given shard.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against

## LeagueOfLegends.getMasteryPagesBySummonerId
Get mastery pages for a given summoner ID.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Id of the summoner

## LeagueOfLegends.getMatchIdsByTournamentCode
Get match IDs by tournament code

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Riot
| region        | String     | Region to execute against
| tournamentCode| String     | Code of the tournament

## LeagueOfLegends.getMatch
Get match by match ID.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key obtained from Riot
| region | String     | Region to execute against
| matchId| Number     | Id of the match

## LeagueOfLegends.getMatchByTournamentCode
Get match by match ID and tournament code

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Riot
| region        | String     | Region to execute against
| matchId       | Number     | Id of the match
| tournamentCode| String     | Code of the tournament

## LeagueOfLegends.getMatchlist
Get matchlist for ranked games played on given account ID and platform ID

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| accountId | Number     | Id of the account
| queue     | String     | Set of queue IDs for which to filtering matchlist.
| beginTime | Number     | The begin time to use for filtering matchlist specified as epoch milliseconds
| endIndex  | Number     | The end index to use for filtering matchlist.
| season    | String     | Set of season IDs for which to filtering matchlist.
| champion  | String     | Set of champion IDs for which to filtering matchlist.
| beginIndex| Number     | The begin index to use for filtering matchlist.
| endTime   | Number     | The end time to use for filtering matchlist specified as epoch milliseconds

## LeagueOfLegends.getRecentMatchlist
Get matchlist for last 20 matches played on given account ID and platform ID

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Riot
| region   | String     | Region to execute against
| accountId| Number     | Id of the account

## LeagueOfLegends.getMatchTimeline
Get match timeline by match ID

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key obtained from Riot
| region | String     | Region to execute against
| matchId| Number     | Id of the match

## LeagueOfLegends.getRunePagesBySummonerId
Get rune pages for a given summoner ID

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Id of the summoner

## LeagueOfLegends.getCurrentGameInfoBySummoner
Get current game information for the given summoner ID.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Id of the summoner

## LeagueOfLegends.getFeaturedGames
Get list of featured games

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against

## LeagueOfLegends.getChampionList
Retrieves champion list

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key obtained from Riot
| region       | String     | Region to execute against
| version      | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| champListData| String     | Tags to return additional data. Only type, version, data, id, key, name, and title are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.
| dataById     | Boolean    | If specified as true, the returned data map will use the champions' IDs as the keys. If not specified or specified as false, the returned data map will use the champions' keys instead.
| locale       | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.

## LeagueOfLegends.getChampionDataById
Retrieves champion by ID

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| championId| Number     | Id of the champion
| version   | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale    | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| champData | String     | Tags to return additional data. Only id, key, name, and title are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getItemList
Retrieves item list

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from Riot
| region      | String     | Region to execute against
| version     | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale      | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| itemListData| String     | Tags to return additional data. Only type, version, basic, data, id, name, plaintext, group, and description are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getItemById
Retrieves item by ID

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from Riot
| region  | String     | Region to execute against
| itemId  | Number     | Id of the item
| version | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale  | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| itemData| String     | Tags to return additional data. Only id, name, plaintext, group, and description are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getLanguageStrings
Retrieve language strings data

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key obtained from Riot
| region | String     | Region to execute against
| version| String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.

## LeagueOfLegends.getLanguages
Retrieve supported languages data.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against

## LeagueOfLegends.getMapData
Retrieve map data.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key obtained from Riot
| region | String     | Region to execute against
| version| String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.

## LeagueOfLegends.getMasteryList
Retrieves mastery list

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Api key obtained from Riot
| region         | String     | Region to execute against
| version        | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale         | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| masteryListData| String     | Tags to return additional data. Only type, version, data, id, name, and description are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getMasteryById
Retrieves mastery item by ID.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Api key obtained from Riot
| region         | String     | Region to execute against
| masteryId      | Number     | Id of the mastery
| version        | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale         | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| masteryListData| String     | Tags to return additional data. Only type, version, data, id, name, and description are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getProfileIcons
Retrieve profile icons

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key obtained from Riot
| region | String     | Region to execute against
| version| String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.

## LeagueOfLegends.getRealm
Retrieve realm data

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against

## LeagueOfLegends.getRuneList
Retrieves runes list

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from Riot
| region      | String     | Region to execute against
| version     | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale      | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| runeListData| String     | Tags to return additional data. Only type, version, data, id, name, rune, and description are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getRuneById
Retrieves rune by ID.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from Riot
| region      | String     | Region to execute against
| runeId      | Number     | Id of the rune
| version     | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale      | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| runeListData| String     | Tags to return additional data. Only type, version, data, id, name, rune, and description are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getSummonerSpellList
Retrieves summoner spell list

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key obtained from Riot
| region       | String     | Region to execute against
| version      | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale       | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| spellListData| String     | Tags to return additional data. Only type, version, data, id, key, name, description, and summonerLevel are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.
| dataById     | Boolean    | If specified as true, the returned data map will use the spells' IDs as the keys. If not specified or specified as false, the returned data map will use the spells' keys instead.

## LeagueOfLegends.getSummonerSpellList
Retrieves summoner spell list

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Api key obtained from Riot
| region         | String     | Region to execute against
| summonerSpellId| Number     | Id of the summoner spell
| version        | String     | Data dragon version for returned data. If not specified, the latest version for the region is used. List of valid versions can be obtained from the /versions endpoint
| locale         | String     | Locale code for returned data (e.g., en_US, es_ES). If not specified, the default locale for the region is used.
| spellListData  | String     | Tags to return additional data. Only type, version, data, id, key, name, description, and summonerLevel are returned by default if this parameter isn't specified. To return all additional data, use the tag 'all'.

## LeagueOfLegends.getVersions
Retrieve version data

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Riot
| region| String     | Region to execute against

## LeagueOfLegends.getByAccountId
Get a summoner by account ID.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Riot
| region   | String     | Region to execute against
| accountId| Number     | Id of the account

## LeagueOfLegends.getBySummonerName
Get a summoner by summoner name.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from Riot
| region      | String     | Region to execute against
| summonerName| String     | Name of the summoner

## LeagueOfLegends.getBySummonerId
Get a summoner by summoner id.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Riot
| region    | String     | Region to execute against
| summonerId| Number     | Id of the summoner

## LeagueOfLegends.getMockLobbyEventsByCode
Gets a mock list of lobby events by tournament code

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Riot
| region        | String     | Region to execute against
| tournamentCode| String     | Code of the tournament

## LeagueOfLegends.getTournamentCode
Returns the tournament code DTO associated with a tournament code string

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Riot
| region        | String     | Region to execute against
| tournamentCode| String     | Code of the tournament

## LeagueOfLegends.getLobbyEventsByCode
Gets a list of lobby events by tournament code.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Riot
| region        | String     | Region to execute against
| tournamentCode| String     | Code of the tournament


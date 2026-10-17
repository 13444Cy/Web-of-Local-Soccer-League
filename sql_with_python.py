
'''INSERT INTO football_clubs (id, club_name, owner_name, established_date) VALUES
1	London Lions	James Wilson	1995-08-12
2	Manchester United	Alex Ferguson	1878-03-05
3	Liverpool FC	John Henry	1892-03-15
4	Chelsea Blues	Roman Abramovich	1905-03-10
5	Arsenal Gunners	Stan Kroenke	1886-10-01
6	Tottenham Hotspur	Daniel Levy	1882-09-05
7	Manchester City	Sheikh Mansour	1880-11-23
8	Newcastle United	Mike Ashley	1892-12-09
9	Leeds United	Andrea Radrizzani	1919-10-17
10	Aston Villa	Nassef Sawiris	1874-11-21
11	Everton Toffees	Farhad Moshiri	1878-11-26
12	West Ham United	David Sullivan	1895-06-29
13	Leicester City	King Power	1884-10-01
14	Southampton Saints	Gao Jisheng	1885-11-21
15	Crystal Palace	Steve Parish	1905-09-10
16	Wolverhampton Wolves	Fosun International	1877-08-01
17	Brighton Seagulls	Tony Bloom	1901-06-24
18	Brentford Bees	Matthew Benham	1889-10-10
19	Fulham Cottagers	Shahid Khan	1879-08-01
20	Nottingham Forest	Evangelos Marinakis	1865-01-01'''

with open('sql_code.txt', 'w') as f:
  f.write('INSERT INTO teams (id, name, owner, established)\nVALUES (London Lions, James Wilson, 1995-08-12),\n (Manchester United, Alex Ferguson, 1878-03-05),\n (Liverpool FC, John Henry, 1892-03-15),\n (Chelsea Blues, Roman Abramovich, 1905-03-10),\n (Arsenal Gunners, Stan Kroenke, 1886-10-01),\n (Tottenham Hotspur, Daniel Levy, 1882-09-05),\n (Manchester City, Sheikh Mansour, 1880-11-23),\n (Newcastle United, Mike Ashley, 1892-12-09),\n (Leeds United, Andrea Radrizzani, 1919-10-17),\n (Aston Villa, Nassef Sawiris, 1874-11-21),\n (Everton Toffees, Farhad Moshiri, 1878-11-26),\n (West Ham United, David Sullivan, 1895-06-29),\n (Leicester City, King Power, 1884-10-01),\n (Southampton Saints, Gao Jisheng, 1885-11-21),\n (Crystal Palace, Steve Parish, 1905-09-10),\n (Wolverhampton Wolves, Fosun International, 1877-08-01),\n (Brighton Seagulls, Tony Bloom, 1901-06-24),\n (Brentford Bees, Matthew Benham, 1889-10-10),\n (Fulham Cottagers, Shahid Khan, 1879-08-01),\n (Nottingham Forest, Evangelos Marinakis, 1865-01-01);')
  f.close()
  print("SQL code written to sql_code.txt")
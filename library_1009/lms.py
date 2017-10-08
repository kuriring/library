#-*-coding: utf-8 -*-
import requests
import sys
from requests.packages.urllib3.exceptions import InsecureRequestWarning
requests.packages.urllib3.disable_warnings(InsecureRequestWarning)
'''
print "Input user student_number : "
id = raw_input()
print "Input user password : "
ps = raw_input()
'''
id = sys.argv[1]
ps = sys.argv[2]
#Code Number1
s = requests.Session()
url ='https://lms.pknu.ac.kr/ilos/main/main_form.acl'
a= s.get(url,verify=False)

#Code Number2
login_url = 'https://lms.pknu.ac.kr/ilos/lo/login.acl'
header = {'User-Agent': 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/7.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C; .NET4.0E)'}
data ={'returnURL':'','challenge':'','response':'','usr_id':id,'usr_pwd':ps}
b = s.post(login_url,headers=header,verify=False,data=data)
coo = s.cookies.get_dict()
sess=  coo['JSESSIONID']
print "Login Success!!!!!!!!!!!!!!!!!!!!!!"

#Code Number3
myinfo_url = 'https://lms.pknu.ac.kr/ilos/mp/myinfo_form.acl'
cookie ={'_language':'ko', 'JSESSIONID':sess,'sso_token':'KusE3lElQuMDNyeuD3aVdPqXomQnMAQgsKEnHdKl6ldzG5Gq19ww4zH4sxlMgV8aEc%2Fn6kxuBQCkp7vDZ%2BUEnuWvCZudhpkYgudmw0jJ3YeQkmwgFmBvvc5bgwQRzT%2FMu0icpg7vMLBtE1jhYOnW6T%2F7qO3UCbQ07tnDYqtMFHv3XbqEsyZmRNSu0xwkHU5dz70u3baUOUn7vQqZ8gR9ry08%2FL%2BAjUQa5Zf7W2bKy%2F0%3D'} 
c = requests.get(myinfo_url,verify=False,cookies=cookie)
tmp  = c.text.encode('utf-8')
print "Name : " + tmp.split('<td style="font-weight: bold; ">이름</td>')[1].split('<td>')[1].split('</td>')[0]
print "H.P : " + c.text.split('width: 200px;">')[1].split('&nbsp;')[0]
print "E-mail : " + c.text.split('<div style="width: 200px; float: left; overflow: hidden;">')[1].split('&nbsp;</div>')[0]

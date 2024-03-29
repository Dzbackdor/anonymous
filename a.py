# import requests
# from bs4 import BeautifulSoup

# cookies = {
#     'XSRF-TOKEN': 'eyJpdiI6IlRqZS9VVTBKU09TcHVqcCt2UmlhUVE9PSIsInZhbHVlIjoiVVVQb1Vvc3RHaDk4QlpORjZvNTdOdS9aWHRoQmpTZnBaUGROSS9sRm13THJSWUZHTU9Ja1BweGRqbnVWSS93alAvV1phendOQVpkV084TEwzZGZQMzc3b2dGV1hCS3pEZW9rNUlJc3JZV3hobjRKV0EvekZsOVVheUwwWW9iQngiLCJtYWMiOiI3MmE3OThlNjBmYmUyZWM0MDc2ODFjNDZiZGQwMDJjNWIzYjU2YjNhOTFkY2MyZGMzZjg5YWRiYzM5ZDlmZjllIiwidGFnIjoiIn0%3D',
#     'prepostseocom_session': 'eyJpdiI6IkQxaGJMZnVKVEI5clViQUI2Z2lTQWc9PSIsInZhbHVlIjoiNjJ5aTZFWHpEYTd6RkpiN09BbzdidFFQOC8wTmdEeGd4Q1RZMURoM2xJT1h2TnRPYUpzVUh6RTBaREFTNmVIaHlyRFlKbDNPdWRCMG1LK0gvTHZWdm1UVmJvejl0TGxaT1lJa1J2WHJjV3l4WU1vUHhFTGl3MWdVeDdUUnJ4blMiLCJtYWMiOiJiNzhlZGFhZDU2Y2ZmYmU4MDllZDljM2YyMzdiOTQyODg1N2QzMjhiOTg2MjI1ZjQ4NDQxZWYwYjg1OWJmNTk3IiwidGFnIjoiIn0%3D',
# }

# headers = {
#     'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36',
#     'x-csrf-token': 'PX2KLg0dAq5EgvjrUOiCzG99vtNBBBp2zfnjR2N8',
#     'x-requested-with': 'XMLHttpRequest',
# }

# url = 'https://msdsilver.com/'

# payload = {
#     'urls[]': url,
#     'count': '0',
#     'tool_key': 'domain_authority_checker',
# }

# # response = requests.get(url_post2, cookies=cookies, headers=headers)
# response = requests.post('https://www.prepostseo.com/ajax/check-authority', cookies=cookies, headers=headers, data=payload)
# print(response.text)

import argparse
import requests
from bs4 import BeautifulSoup

def main(scan):
    # Baca URL dari file
    with open(scan, 'r') as file:
        urls = [line.strip() for line in file.readlines()]

    cookies = {
        'XSRF-TOKEN': 'eyJpdiI6IlRqZS9VVTBKU09TcHVqcCt2UmlhUVE9PSIsInZhbHVlIjoiVVVQb1Vvc3RHaDk4QlpORjZvNTdOdS9aWHRoQmpTZnBaUGROSS9sRm13THJSWUZHTU9Ja1BweGRqbnVWSS93alAvV1phendOQVpkV084TEwzZGZQMzc3b2dGV1hCS3pEZW9rNUlJc3JZV3hobjRKV0EvekZsOVVheUwwWW9iQngiLCJtYWMiOiI3MmE3OThlNjBmYmUyZWM0MDc2ODFjNDZiZGQwMDJjNWIzYjU2YjNhOTFkY2MyZGMzZjg5YWRiYzM5ZDlmZjllIiwidGFnIjoiIn0%3D',
        'prepostseocom_session': 'eyJpdiI6IkQxaGJMZnVKVEI5clViQUI2Z2lTQWc9PSIsInZhbHVlIjoiNjJ5aTZFWHpEYTd6RkpiN09BbzdidFFQOC8wTmdEeGd4Q1RZMURoM2xJT1h2TnRPYUpzVUh6RTBaREFTNmVIaHlyRFlKbDNPdWRCMG1LK0gvTHZWdm1UVmJvejl0TGxaT1lJa1J2WHJjV3l4WU1vUHhFTGl3MWdVeDdUUnJ4blMiLCJtYWMiOiJiNzhlZGFhZDU2Y2ZmYmU4MDllZDljM2YyMzdiOTQyODg1N2QzMjhiOTg2MjI1ZjQ4NDQxZWYwYjg1OWJmNTk3IiwidGFnIjoiIn0%3D',
    }

    headers = {
        'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36',
        'x-csrf-token': 'PX2KLg0dAq5EgvjrUOiCzG99vtNBBBp2zfnjR2N8',
        'x-requested-with': 'XMLHttpRequest',
    }

    for url in urls:
        payload = {
            'urls[]': url,
            'count': '0',
            'tool_key': 'domain_authority_checker',
        }

        response = requests.post('https://www.prepostseo.com/ajax/check-authority', cookies=cookies, headers=headers, data=payload)

        # Cek respons dan lakukan sesuatu dengan data yang diterima
        if response.status_code == 200:
            print(f"URL: {url}")
            print(response.text)
            print("----------------------------------------")
        else:
            print(f"Gagal memproses URL: {url}")

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Process URL file.")
    parser.add_argument("-scan", help="File containing URLs to process.", required=True)
    args = parser.parse_args()
    main(args.scan)

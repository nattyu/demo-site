@extends('layouts.app')

@section('title', 'プライバシーポリシー | サンプルサイト')

@section('content')
<div class="bg-gray-100 py-10">
    <div class="container mx-auto max-w-4xl bg-white p-6 rounded-lg shadow">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">プライバシーポリシー</h1>
        <p class="text-gray-700 mb-6">
            ＿＿＿＿＿＿＿＿（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。
        </p>
        
        <div class="space-y-6">
            <!-- 第1条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第1条（個人情報）</h2>
                <p class="text-gray-700 mt-2">
                    「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。
                </p>
            </div>

            <!-- 第2条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第2条（個人情報の収集方法）</h2>
                <p class="text-gray-700 mt-2">
                    当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。
                </p>
            </div>

            <!-- 第3条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第3条（個人情報を収集・利用する目的）</h2>
                <p class="text-gray-700 mt-2">
                    当社が個人情報を収集・利用する目的は，以下のとおりです。
                </p>
                <ol class="list-decimal list-inside text-gray-700 mt-2 space-y-2">
                    <li>当社サービスの提供・運営のため</li>
                    <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
                    <li>ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため</li>
                    <li>メンテナンス，重要なお知らせなど必要に応じたご連絡のため</li>
                    <li>利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</li>
                    <li>ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため</li>
                    <li>有料サービスにおいて，ユーザーに利用料金を請求するため</li>
                    <li>上記の利用目的に付随する目的</li>
                </ol>
            </div>

            <!-- 第4条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第4条（利用目的の変更）</h2>
                <p class="text-gray-700 mt-2">
                    当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。
                </p>
            </div>

            <!-- 第5条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第5条（個人情報の第三者提供）</h2>
                <p class="text-gray-700 mt-2">
                    当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。
                </p>
                <ol class="list-decimal list-inside text-gray-700 mt-2 space-y-2">
                    <li>人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</li>
                    <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</li>
                    <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</li>
                </ol>
            </div>

            <!-- 第6条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第6条（個人情報の開示）</h2>
                <p class="text-gray-700 mt-2">
                    当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。
                </p>
            </div>

            <!-- 第7条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第7条（個人情報の訂正および削除）</h2>
                <ol class="list-decimal list-inside text-gray-700 mt-2 space-y-2">
                    <li>
                        ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。
                    </li>
                    <li>
                        当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。
                    </li>
                    <li>
                        当社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。
                    </li>
                </ol>
            </div>

            <!-- 第8条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第8条（個人情報の利用停止等）</h2>
                <ol class="list-decimal list-inside text-gray-700 mt-2 space-y-2">
                    <li>
                        当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。
                    </li>
                    <li>
                        前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。
                    </li>
                    <li>
                        当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。
                    </li>
                    <li>
                        前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。
                    </li>
                </ol>
            </div>

            <!-- 第9条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第9条（プライバシーポリシーの変更）</h2>
                <ol class="list-decimal list-inside text-gray-700 mt-2 space-y-2">
                    <li>
                        本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。
                    </li>
                    <li>
                        当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。
                    </li>
                </ol>
            </div>

            <!-- 第10条 -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">第10条（お問い合わせ窓口）</h2>
                <p class="text-gray-700 mt-2">
                    本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。
                </p>
                <address class="text-gray-700 mt-2">
                    住所：<br>
                    社名：<br>
                    代表取締役：<br>
                    担当部署：<br>
                    Eメールアドレス：
                </address>
            </div>
        </div>
    </div>
</div>
@endsection

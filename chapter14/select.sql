-- テーブルの和結合
-- 「posts」テーブルに「new_posts」テーブルを和結合


-- 「posts」テーブルに「new_posts」テーブルを和結合（重複も表示）


-- テーブルの内部結合
-- 「posts」テーブルの「id」、「title」、「content」、「user_id」と
-- 「users」テーブルの「name」フィールドのキーが一致するレコードを抽出
select
    posts.id,
    posts.title,
    posts.content,
    posts.user_id,
    users.name
  from
    posts join users
  on
    posts.user_id = users.id;

-- 「posts」テーブルの「id」、「title」、「content」と
-- 「users」テーブルの「name」フィールドのキーが一致するレコードを
-- 「posts」テーブルの「id」の降順で抽出
select
    posts.id,
    posts.title,
    posts.content,
    posts.user_id,
    users.name
  from
    posts join users
  on
    posts.user_id = users.id
  order by
    posts.created desc;


-- 「new_posts」テーブルの「id」、「title」、「content」、「created」と
-- 「users」テーブルの「name」フィールドのキーが一致するレコードを
-- 「new_posts」テーブルの「created」が新しい順に抽出


insert posts (
    title,
    content,
    user_id,
    created,
    modified
  )
  values (
    '新メンバーの紹介',
    'みなさんどうもはじめまして。新メンバーです。',
    6,
    '2018/04/9 10:00:00',
    '2018/04/9 10:00:00'
  );





-- 外部結合
-- 「new_posts」テーブルの「id」、「title」、「content」、「created」と
-- 「users」テーブルの「name」フィールドを「new_posts」テーブルは全レコード
-- 「new_posts」テーブルの「created」が新しい順に抽出
select
    posts.id,
    posts.title,
    posts.content,
    posts.created,
    users.name
  from
    posts left join users
  on
    posts.user_id = users.id
  order by
    posts.created desc;



-- 相関名を付ける
-- 「new_posts」テーブルの「id」、「title」、「content」、「created」と
-- 「users」テーブルの「name」フィールドを「new_posts」テーブルは全レコード
-- 「new_posts」テーブルの「created」が新しい順に抽出
select
    p.id,
    p.title,
    p.content,
    p.created,
    u.name
  from
    posts as p left join users as u
  on
    p.user_id = u.id
  order by
    p.created desc;

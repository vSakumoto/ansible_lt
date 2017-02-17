## Ansible + Docker(for Mac)でのLT用コード


## 概要

- Ansible PlaybookにてUbuntu14.04のDockerイメージにWordpressを構築する

## 環境

- Docker for Mac 1.13.0
- Ansible 2.1.0.0
- macOS Sierra 10.12.3

## 実行方法

同梱されているバッチスクリプトを実行することにより、wordpress環境を構築することができます。

```
git clone https://github.com/vSakumoto/ansible_lt.git

cd ansible_lt

bash initial.sh
```

![ansible_demo](./src/ansible.gif)


## ※注意※wordpressのID/PWはコード上にハードコードされています。

- 実利用する際はansible vaultなどを利用の上、難読化もしくはgitignoreに含めて対応してください
- リファクタされていないので。。。PR出していただければ直ぐマージします！




# Grav Ls Plugin

Grav Ls Plugin は、[Grav CMS](http://github.com/getgrav/grav) で利用できる。ページ一覧を表示するための plugin です。公式リポジトリに登録されていないので

## インストール

`(grav root)/user/plugins/` フォルダーに、ダウンロードしたファイルを流し込んでください。

! 公式リポジトリに登録されていないので、GPM コマンドなどではインストールできません。

## Configuration

このプラグインの設定は、`user/plugins/ls/ls.yaml` ファイルを `user/config/plugins/ls.yaml` にコピーして行ってください。

現在設定できるオプションは、有効、無効だけです。

```yaml
enabled: true
```

Admin Plugin を使用した場合、設定を保存すると、ls.yaml という名前の設定ファイルが `user/config/plugins/` フォルダに保存されることに注意してください。

## Usage

以下のように Twig 関数を書くと、表示中ページの１個下の階層のページへのリンクが一覧表示されます。

{{ ls() }}


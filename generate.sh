#!/usr/bin/env bash
#
# Generate Woocommerce Custom Product Addons stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for Woocommerce Custom Product Addons.\n * @see https://acowebs.com/woo-custom-product-addons\n * @see https://github.com/0zd0/carbon-fields-stubs\n */'

FILE="woocommerce-custom-product-addons-stubs.php"
DIR=$(dirname "$0")

IGNORE_HOOKS=(
""
)
IGNORE_HOOKS_STRING=$(IFS=,; echo "${IGNORE_HOOKS[*]}")

set -e

test -f "$FILE" || touch "$FILE"
test -d "source/woo-custom-product-addons-pro"

"$DIR/vendor/bin/generate-hooks" \
    --input=source/woo-custom-product-addons-pro \
    --input=source/overrides \
    --output=hooks \
    --ignore-hooks="$IGNORE_HOOKS_STRING"


"$DIR/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --constants \
    --out="$FILE"
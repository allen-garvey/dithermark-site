PHP_BUILD_MODE=debug

PUBLIC_HTML_DIR=public_html
HOME_PAGE=$(PUBLIC_HTML_DIR)/index.html

#php source
PHP_SOURCE=$(shell find ./inc -type f -name '*.php')

#css
CSS_OUTPUT_DIR=$(PUBLIC_HTML_DIR)/styles
CSS_OUTPUT=$(CSS_OUTPUT_DIR)/style.css

#optional dminjs js minifier
DMINJS_DIR=dminjs
DMINJS_BIN=$(DMINJS_DIR)/bin/dminjs


all: $(CSS_OUTPUT) $(HOME_PAGE)

install: $(PUBLIC_HTML_DIR) $(JS_OUTPUT_DIR)
	npm install

#used when changing between PHP_BUILD_MODES
# reset:
# 	rm -f $(HOME_PAGE)

#don't use variable, to guard against it becoming unset
clean: #reset
	rm -rf ./public_html
	rm -rf ./dminjs

#target specific variable
release: PHP_BUILD_MODE=release
release: all

$(PUBLIC_HTML_DIR):
	mkdir -p $(PUBLIC_HTML_DIR)

$(JS_OUTPUT_DIR):
	mkdir -p $(JS_OUTPUT_DIR)
	
$(CSS_OUTPUT): $(shell find ./sass -type f -name '*.scss')
	npm run gulp

$(HOME_PAGE): $(PHP_SOURCE)
	php inc/templates/home/index.php $(PHP_BUILD_MODE) > $(HOME_PAGE)

$(DMINJS_DIR):
	git clone https://github.com/allen-garvey/dminjs.git

$(DMINJS_BIN): $(DMINJS_DIR)
	make -C $(DMINJS_DIR)
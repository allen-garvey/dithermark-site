PUBLIC_HTML_DIR=public_html

#pages
HOME_PAGE=$(PUBLIC_HTML_DIR)/index.html

#php
PHP_SOURCE=$(shell find ./inc -type f -name '*.php')

#css
CSS_OUTPUT_DIR=$(PUBLIC_HTML_DIR)/styles
CSS_OUTPUT=$(CSS_OUTPUT_DIR)/style.css

all: $(CSS_OUTPUT) $(HOME_PAGE)

install:
	npm install

clean:
	rm $(HOME_PAGE)
	
$(CSS_OUTPUT): $(shell find ./sass -type f -name '*.scss')
	npm run gulp

$(HOME_PAGE): $(PHP_SOURCE)
	php inc/templates/home/index.php > $(HOME_PAGE)
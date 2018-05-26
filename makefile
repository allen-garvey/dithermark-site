PUBLIC_HTML_DIR=public_html

#pages
FAQ_DIR=$(PUBLIC_HTML_DIR)/faq
APPENDIX_DIR=$(PUBLIC_HTML_DIR)/appendix

HOME_PAGE=$(PUBLIC_HTML_DIR)/index.html
FAQ_PAGE=$(FAQ_DIR)/index.html
APPENDIX_PAGE=$(APPENDIX_DIR)/index.html

#php
PHP_SOURCE=$(shell find ./inc -type f -name '*.php')
PHP_MODELS=$(shell find ./inc -type f -name '*.xml')

#css
CSS_OUTPUT_DIR=$(PUBLIC_HTML_DIR)/styles
CSS_OUTPUT=$(CSS_OUTPUT_DIR)/style.css

all: $(CSS_OUTPUT) $(HOME_PAGE) $(FAQ_PAGE)

install:
	npm install
	mkdir -p $(FAQ_DIR)
	mkdir -p $(APPENDIX_DIR)

clean:
	rm $(HOME_PAGE) $(FAQ_PAGE) $(APPENDIX_PAGE)
	
$(CSS_OUTPUT): $(shell find ./sass -type f -name '*.scss')
	npm run gulp

$(HOME_PAGE): $(PHP_SOURCE)
	php inc/templates/home/index.php > $(HOME_PAGE)

$(FAQ_PAGE): $(PHP_SOURCE) $(PHP_MODELS)
	php inc/templates/faq/index.php > $(FAQ_PAGE)

$(APPENDIX_PAGE): $(PHP_SOURCE) $(PHP_MODELS)
	php inc/templates/appendix/index.php > $(APPENDIX_PAGE)
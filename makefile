PUBLIC_HTML_DIR=public_html

#pages
FAQ_DIR=$(PUBLIC_HTML_DIR)/faq
RESOURCES_DIR=$(PUBLIC_HTML_DIR)/resources

HOME_PAGE=$(PUBLIC_HTML_DIR)/index.html
FAQ_PAGE=$(FAQ_DIR)/index.html
RESOURCES_PAGE=$(RESOURCES_DIR)/index.html

#php
PHP_SOURCE=$(shell find ./inc -type f -name '*.php')
PHP_MODELS=$(shell find ./inc -type f -name '*.xml')

#css
CSS_OUTPUT_DIR=$(PUBLIC_HTML_DIR)/styles
CSS_OUTPUT=$(CSS_OUTPUT_DIR)/style.css

all: $(CSS_OUTPUT) html images

# html: $(HOME_PAGE) $(FAQ_PAGE) $(RESOURCES_PAGE)
html: $(HOME_PAGE)

install:
	npm install
	mkdir -p $(FAQ_DIR)
	mkdir -p $(RESOURCES_DIR)

clean:
	rm $(HOME_PAGE) $(FAQ_PAGE) $(RESOURCES_PAGE)

images: $(shell find ./images -type f -name '*.png') build/image.sh
	mkdir -p public_html/images
	find images -type f -name "*.png" | xargs -P 8 -I {} ./build/image.sh {}
	
$(CSS_OUTPUT): $(shell find ./sass -type f -name '*.scss')
	npm run deploy

$(HOME_PAGE): $(PHP_SOURCE) $(PHP_MODELS)
	php inc/templates/home/index.php > $(HOME_PAGE)

$(FAQ_PAGE): $(PHP_SOURCE) $(PHP_MODELS)
	php inc/templates/faq/index.php > $(FAQ_PAGE)

$(RESOURCES_PAGE): $(PHP_SOURCE) $(PHP_MODELS)
	php inc/templates/resources/index.php > $(RESOURCES_PAGE)
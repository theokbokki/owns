# Makefile

ESBUILD = npx esbuild
SRC = src/assets
DEST = public/assets
MANIFEST = public/manifest.json

all: clean build-assets build-css manifest

clean:
	rm -rf $(DEST)
	mkdir -p $(DEST)
	rm -f $(MANIFEST)

# Copy and hash all images
build-assets:
	find $(SRC)/img $(SRC)/favicon -type f | while read file; do \
		name=$$(basename $$file); \
		ext=$${name##*.}; \
		base=$${name%.*}; \
		hash=$$(sha256sum "$$file" | cut -c1-8); \
		cp "$$file" "$(DEST)/$${base}_$${hash}.$${ext}"; \
	done

# Build and hash CSS
build-css:
	npx esbuild $(SRC)/css/app.css --outfile=$(DEST)/app.css --bundle --minify
	hash=$$(sha256sum $(DEST)/app.css | cut -c1-8); \
	mv $(DEST)/app.css $(DEST)/app_$${hash}.css

# Generate manifest
manifest:
	echo "{" > $(MANIFEST)
	ls $(DEST) | while read file; do \
		orig=$$(echo $$file | sed -E 's/_([a-f0-9]{8})//'); \
		echo "  \"$$orig\": \"assets/$$file\","; \
	done | sed '$$s/,$$//' >> $(MANIFEST)
	echo "}" >> $(MANIFEST)

.PHONY: all clean build-assets build-css build-js manifest

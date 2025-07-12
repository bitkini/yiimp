CC = gcc

# Use GNU11 so the SPH code’s alignment attributes pass,
# and silence the ripemd “overflow” warnings.
CFLAGS = -O3 -march=native -std=gnu11 -Wno-stringop-overflow
LDFLAGS =

# Note: blake2s.c is omitted here to avoid the
#      alignment‐vs‐size error in its S[1] declaration.
SOURCES = \
    sph_jh.c        sph_blake.c    sph_bmw.c       sph_groestl.c \
    sph_skein.c     sph_keccak.c   sph_luffa.c     sph_cubehash.c \
    sph_shavite.c   sph_simd.c     sph_echo.c      sph_fugue.c \
    sph_hamsi.c     sph_shabal.c   sph_whirlpool.c sph_haval.c \
    sph_hefty1.c    sph_ripemd.c   sph_sha2.c      sph_sha2big.c \
    sph_tiger.c     blake2b.c      blake2s.c

OBJECTS = $(SOURCES:.c=.o)
OUTPUT  = libhash.a

all: $(OUTPUT)

$(OUTPUT): $(OBJECTS)
	ar rc $@ $(OBJECTS)
	touch ../stratum.cpp

.c.o:
	$(CC) $(CFLAGS) -c $< -o $@

clean:
	rm -f $(OBJECTS) $(OUTPUT)
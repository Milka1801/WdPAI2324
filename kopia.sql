--
-- PostgreSQL database dump
--

-- Dumped from database version 16.1 (Debian 16.1-1.pgdg120+1)
-- Dumped by pg_dump version 16.1

-- Started on 2024-01-29 01:35:39 UTC

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 221 (class 1259 OID 24613)
-- Name: categories; Type: TABLE; Schema: public; Owner: docker
--

CREATE TABLE public.categories (
    category_id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE public.categories OWNER TO docker;

--
-- TOC entry 220 (class 1259 OID 24612)
-- Name: categories_category_id_seq; Type: SEQUENCE; Schema: public; Owner: docker
--

CREATE SEQUENCE public.categories_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.categories_category_id_seq OWNER TO docker;

--
-- TOC entry 3411 (class 0 OID 0)
-- Dependencies: 220
-- Name: categories_category_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: docker
--

ALTER SEQUENCE public.categories_category_id_seq OWNED BY public.categories.category_id;


--
-- TOC entry 225 (class 1259 OID 24650)
-- Name: comments; Type: TABLE; Schema: public; Owner: docker
--

CREATE TABLE public.comments (
    comment_id integer NOT NULL,
    user_id integer,
    recipe_id integer,
    content text NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE public.comments OWNER TO docker;

--
-- TOC entry 224 (class 1259 OID 24649)
-- Name: comments_comment_id_seq; Type: SEQUENCE; Schema: public; Owner: docker
--

CREATE SEQUENCE public.comments_comment_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.comments_comment_id_seq OWNER TO docker;

--
-- TOC entry 3412 (class 0 OID 0)
-- Dependencies: 224
-- Name: comments_comment_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: docker
--

ALTER SEQUENCE public.comments_comment_id_seq OWNED BY public.comments.comment_id;


--
-- TOC entry 219 (class 1259 OID 24604)
-- Name: recipe; Type: TABLE; Schema: public; Owner: docker
--

CREATE TABLE public.recipe (
    recipe_id integer NOT NULL,
    name character varying(255) NOT NULL,
    cuisine character varying(100) NOT NULL,
    description text NOT NULL,
    file_path character varying(255) NOT NULL
);


ALTER TABLE public.recipe OWNER TO docker;

--
-- TOC entry 222 (class 1259 OID 24619)
-- Name: recipe_categories; Type: TABLE; Schema: public; Owner: docker
--

CREATE TABLE public.recipe_categories (
    recipe_id integer NOT NULL,
    category_id integer NOT NULL
);


ALTER TABLE public.recipe_categories OWNER TO docker;

--
-- TOC entry 218 (class 1259 OID 24603)
-- Name: recipe_id_seq; Type: SEQUENCE; Schema: public; Owner: docker
--

CREATE SEQUENCE public.recipe_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.recipe_id_seq OWNER TO docker;

--
-- TOC entry 3413 (class 0 OID 0)
-- Dependencies: 218
-- Name: recipe_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: docker
--

ALTER SEQUENCE public.recipe_id_seq OWNED BY public.recipe.recipe_id;


--
-- TOC entry 223 (class 1259 OID 24634)
-- Name: user_recipes; Type: TABLE; Schema: public; Owner: docker
--

CREATE TABLE public.user_recipes (
    user_id integer NOT NULL,
    recipe_id integer NOT NULL
);


ALTER TABLE public.user_recipes OWNER TO docker;

--
-- TOC entry 216 (class 1259 OID 24581)
-- Name: users; Type: TABLE; Schema: public; Owner: docker
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    email character varying(200) NOT NULL,
    password character varying(255) NOT NULL,
    phonenumber integer NOT NULL,
    role character varying(255) DEFAULT 'user'::character varying NOT NULL
);


ALTER TABLE public.users OWNER TO docker;

--
-- TOC entry 215 (class 1259 OID 24580)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: docker
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_id_seq OWNER TO docker;

--
-- TOC entry 3414 (class 0 OID 0)
-- Dependencies: 215
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: docker
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 217 (class 1259 OID 24589)
-- Name: users_phonenumber_seq; Type: SEQUENCE; Schema: public; Owner: docker
--

CREATE SEQUENCE public.users_phonenumber_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_phonenumber_seq OWNER TO docker;

--
-- TOC entry 3415 (class 0 OID 0)
-- Dependencies: 217
-- Name: users_phonenumber_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: docker
--

ALTER SEQUENCE public.users_phonenumber_seq OWNED BY public.users.phonenumber;


--
-- TOC entry 3231 (class 2604 OID 24616)
-- Name: categories category_id; Type: DEFAULT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.categories ALTER COLUMN category_id SET DEFAULT nextval('public.categories_category_id_seq'::regclass);


--
-- TOC entry 3232 (class 2604 OID 24653)
-- Name: comments comment_id; Type: DEFAULT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.comments ALTER COLUMN comment_id SET DEFAULT nextval('public.comments_comment_id_seq'::regclass);


--
-- TOC entry 3230 (class 2604 OID 24607)
-- Name: recipe recipe_id; Type: DEFAULT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.recipe ALTER COLUMN recipe_id SET DEFAULT nextval('public.recipe_id_seq'::regclass);


--
-- TOC entry 3227 (class 2604 OID 24584)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3228 (class 2604 OID 24590)
-- Name: users phonenumber; Type: DEFAULT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.users ALTER COLUMN phonenumber SET DEFAULT nextval('public.users_phonenumber_seq'::regclass);


--
-- TOC entry 3401 (class 0 OID 24613)
-- Dependencies: 221
-- Data for Name: categories; Type: TABLE DATA; Schema: public; Owner: docker
--

COPY public.categories (category_id, name) FROM stdin;
1	Italy
2	Poland
3	China
\.


--
-- TOC entry 3405 (class 0 OID 24650)
-- Dependencies: 225
-- Data for Name: comments; Type: TABLE DATA; Schema: public; Owner: docker
--

COPY public.comments (comment_id, user_id, recipe_id, content, created_at) FROM stdin;
\.


--
-- TOC entry 3399 (class 0 OID 24604)
-- Dependencies: 219
-- Data for Name: recipe; Type: TABLE DATA; Schema: public; Owner: docker
--

COPY public.recipe (recipe_id, name, cuisine, description, file_path) FROM stdin;
70	test	Poland	test	ba86442d1c920abc567ff99199945298.jpg
1	KiM Chi	Chinese	The most popular meal in China	Kimchi.jpeg
3	Jojojo	Poland	asdfgg	culinary horizon.png
\.


--
-- TOC entry 3402 (class 0 OID 24619)
-- Dependencies: 222
-- Data for Name: recipe_categories; Type: TABLE DATA; Schema: public; Owner: docker
--

COPY public.recipe_categories (recipe_id, category_id) FROM stdin;
1	3
\.


--
-- TOC entry 3403 (class 0 OID 24634)
-- Dependencies: 223
-- Data for Name: user_recipes; Type: TABLE DATA; Schema: public; Owner: docker
--

COPY public.user_recipes (user_id, recipe_id) FROM stdin;
1	1
2	3
\.


--
-- TOC entry 3396 (class 0 OID 24581)
-- Dependencies: 216
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: docker
--

COPY public.users (id, name, email, password, phonenumber, role) FROM stdin;
1	Paulo	paulorichi@gmail.com	paulo	799076589	user
2	Jennifer	jenny@gmail.eu	1234	123456789	user
3	admin	admin@admin	admin	2	admin
4	Milka	milka@gmail.com	$2y$10$tWIwIFdCS5OsqSFsTBpuLOMXuGN4/4zfrlSzmEQcnGwIXuOB4eQZ.	3	user
5	test	test@test.com	$2y$10$K7PFhC8SpV2lOHv5sUIqhetlvI69CyTf1xaYnJcCQrHuYrPT5VyP.	4	user
6	aaa	a@test.com	$2y$10$EQ5Nb0dV0imzN//n1mCgDOqQd79T5hcAtFgaVVBnyI/Nfj1o3i/nK	5	user
7	aaa	jsnow@pk.edu.pl	$2y$10$kz2SU57bgXMZvsUPVbog7Oe.17kxOz0u5C69Uh9jIPp2izMauS99G	6	user
8	Paulo	paulo@gmail.com	$2y$10$MBsE1QGwhBDD4hlqq8.Qy.E7ceO/K2QHslbv6Y3qy3B4/35z6hSy6	7	user
\.


--
-- TOC entry 3416 (class 0 OID 0)
-- Dependencies: 220
-- Name: categories_category_id_seq; Type: SEQUENCE SET; Schema: public; Owner: docker
--

SELECT pg_catalog.setval('public.categories_category_id_seq', 3, true);


--
-- TOC entry 3417 (class 0 OID 0)
-- Dependencies: 224
-- Name: comments_comment_id_seq; Type: SEQUENCE SET; Schema: public; Owner: docker
--

SELECT pg_catalog.setval('public.comments_comment_id_seq', 1, false);


--
-- TOC entry 3418 (class 0 OID 0)
-- Dependencies: 218
-- Name: recipe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: docker
--

SELECT pg_catalog.setval('public.recipe_id_seq', 82, true);


--
-- TOC entry 3419 (class 0 OID 0)
-- Dependencies: 215
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: docker
--

SELECT pg_catalog.setval('public.users_id_seq', 8, true);


--
-- TOC entry 3420 (class 0 OID 0)
-- Dependencies: 217
-- Name: users_phonenumber_seq; Type: SEQUENCE SET; Schema: public; Owner: docker
--

SELECT pg_catalog.setval('public.users_phonenumber_seq', 7, true);


--
-- TOC entry 3239 (class 2606 OID 24618)
-- Name: categories categories_pkey; Type: CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (category_id);


--
-- TOC entry 3245 (class 2606 OID 24658)
-- Name: comments comments_pkey; Type: CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT comments_pkey PRIMARY KEY (comment_id);


--
-- TOC entry 3241 (class 2606 OID 24623)
-- Name: recipe_categories recipe_categories_pkey; Type: CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.recipe_categories
    ADD CONSTRAINT recipe_categories_pkey PRIMARY KEY (recipe_id, category_id);


--
-- TOC entry 3237 (class 2606 OID 24611)
-- Name: recipe recipe_pkey; Type: CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.recipe
    ADD CONSTRAINT recipe_pkey PRIMARY KEY (recipe_id);


--
-- TOC entry 3243 (class 2606 OID 24638)
-- Name: user_recipes user_recipes_pkey; Type: CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.user_recipes
    ADD CONSTRAINT user_recipes_pkey PRIMARY KEY (user_id, recipe_id);


--
-- TOC entry 3235 (class 2606 OID 24588)
-- Name: users users_pk_2; Type: CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pk_2 PRIMARY KEY (id);


--
-- TOC entry 3250 (class 2606 OID 24664)
-- Name: comments comments_recipe_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT comments_recipe_id_fkey FOREIGN KEY (recipe_id) REFERENCES public.recipe(recipe_id);


--
-- TOC entry 3251 (class 2606 OID 24659)
-- Name: comments comments_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT comments_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- TOC entry 3246 (class 2606 OID 24629)
-- Name: recipe_categories recipe_categories_category_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.recipe_categories
    ADD CONSTRAINT recipe_categories_category_id_fkey FOREIGN KEY (category_id) REFERENCES public.categories(category_id);


--
-- TOC entry 3247 (class 2606 OID 24624)
-- Name: recipe_categories recipe_categories_recipe_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.recipe_categories
    ADD CONSTRAINT recipe_categories_recipe_id_fkey FOREIGN KEY (recipe_id) REFERENCES public.recipe(recipe_id);


--
-- TOC entry 3248 (class 2606 OID 24644)
-- Name: user_recipes user_recipes_recipe_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.user_recipes
    ADD CONSTRAINT user_recipes_recipe_id_fkey FOREIGN KEY (recipe_id) REFERENCES public.recipe(recipe_id);


--
-- TOC entry 3249 (class 2606 OID 24639)
-- Name: user_recipes user_recipes_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: docker
--

ALTER TABLE ONLY public.user_recipes
    ADD CONSTRAINT user_recipes_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


-- Completed on 2024-01-29 01:35:39 UTC

--
-- PostgreSQL database dump complete
--


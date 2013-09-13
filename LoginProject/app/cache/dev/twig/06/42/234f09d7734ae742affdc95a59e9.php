<?php

/* LoginLoginBundle:Default:signup.html.twig */
class __TwigTemplate_0642234f09d7734ae742affdc95a59e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\" >
    <form id=\"form\"  class=\"well\" method=\"POST\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_signup"), "html", null, true);
        echo "\" data-validate=\"parsley\">
        
        <h2>Signup </h2>
        <label>Username</label>
        <input type=\"text\" id=\"username\" name=\"username\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\"/>
        <label>Repeat Username</label>
        <input type=\"text\" name=\"usernameRe\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" data-equalto=\"#username\"/>
        <label>First Name</label>
        <input type=\"text\" name=\"firstname\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" />
        <label>Password</label>
        <input type=\"password\" name=\"password\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" />
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Create Account</button>
        </div>
    </form>
</div>

";
        // line 21
        if (array_key_exists("name", $context)) {
            // line 22
            echo "<div class=\"alert-info fade in\">
    <strong>Hello ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  34 => 4,  100 => 56,  97 => 55,  77 => 42,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 40,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 21,  94 => 22,  89 => 17,  85 => 12,  75 => 26,  68 => 14,  56 => 22,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 50,  78 => 21,  46 => 7,  27 => 4,  44 => 14,  31 => 3,  28 => 2,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 23,  47 => 9,  40 => 8,  37 => 11,  22 => 1,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 24,  83 => 25,  74 => 41,  66 => 15,  55 => 15,  52 => 19,  50 => 17,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 59,  103 => 37,  99 => 25,  95 => 54,  92 => 33,  86 => 28,  82 => 11,  80 => 19,  73 => 24,  64 => 17,  60 => 6,  57 => 20,  54 => 21,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 13,  36 => 5,  33 => 10,  30 => 7,);
    }
}

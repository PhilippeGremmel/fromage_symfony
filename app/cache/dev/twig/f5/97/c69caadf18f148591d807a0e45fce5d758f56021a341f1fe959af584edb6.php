<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_f597c69caadf18f148591d807a0e45fce5d758f56021a341f1fe959af584edb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  33 => 6,  24 => 3,  21 => 2,  19 => 1,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 102,  251 => 101,  248 => 100,  243 => 98,  239 => 97,  228 => 88,  225 => 87,  219 => 84,  213 => 82,  211 => 81,  204 => 78,  202 => 77,  197 => 74,  189 => 71,  174 => 67,  165 => 64,  158 => 62,  148 => 60,  138 => 57,  134 => 56,  127 => 54,  116 => 45,  113 => 44,  105 => 39,  94 => 35,  91 => 34,  82 => 28,  53 => 10,  49 => 9,  45 => 8,  42 => 7,  34 => 4,  31 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  199 => 67,  182 => 69,  177 => 65,  171 => 61,  169 => 66,  147 => 58,  143 => 59,  140 => 55,  132 => 51,  128 => 49,  125 => 44,  122 => 43,  119 => 42,  107 => 36,  93 => 28,  85 => 25,  78 => 21,  71 => 17,  67 => 19,  61 => 13,  57 => 11,  54 => 10,  48 => 8,  46 => 7,  38 => 6,  246 => 99,  164 => 59,  162 => 57,  157 => 56,  145 => 46,  139 => 45,  131 => 55,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 37,  106 => 36,  101 => 32,  98 => 37,  96 => 31,  92 => 29,  83 => 25,  80 => 24,  74 => 23,  66 => 20,  64 => 14,  60 => 15,  55 => 16,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,);
    }
}

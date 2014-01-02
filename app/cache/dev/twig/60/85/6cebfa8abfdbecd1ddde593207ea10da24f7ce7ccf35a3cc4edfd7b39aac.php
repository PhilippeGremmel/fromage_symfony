<?php

/* iimBlogBundle:Article:show.html.twig */
class __TwigTemplate_60856cebfa8abfdbecd1ddde593207ea10da24f7ce7ccf35a3cc4edfd7b39aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
        <div class=\"row\">

                <div class=\"col-md-6 col-md-offset-2\">

                    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</h1>

                    <img class=\"cheese_single\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "my_thumb"), "html", null, true);
        echo "\" />

                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), "html", null, true);
        echo "</p>

                    <h3>Type de Pâte : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pate"), "html", null, true);
        echo "</h3>
                </div>


                    <div class=\"col-md-6 col-md-offset-2\">

                       <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                                <button type=\"button\" class=\"btn btn-warning\">
                                    Modifier
                                 </button>
                            </a>

                        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">
                            <span class=\"glyphicon glyphicon-arrow-left\">Retour</span>
                        </a>

                    </div>

         </div>






    </div>
";
    }

    public function getTemplateName()
    {
        return "iimBlogBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  71 => 29,  62 => 23,  53 => 17,  48 => 15,  43 => 13,  38 => 11,  31 => 6,  28 => 5,);
    }
}

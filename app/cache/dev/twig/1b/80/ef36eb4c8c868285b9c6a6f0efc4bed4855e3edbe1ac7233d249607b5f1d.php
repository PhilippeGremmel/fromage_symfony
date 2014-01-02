<?php

/* iimBlogBundle:Article:new.html.twig */
class __TwigTemplate_1b80ef36eb4c8c868285b9c6a6f0efc4bed4855e3edbe1ac7233d249607b5f1d extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-2\">
    <h1>Article creation</h1>


    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

            <a href=\"";
        // line 12
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
        return "iimBlogBundle:Article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  39 => 10,  31 => 4,  28 => 3,);
    }
}

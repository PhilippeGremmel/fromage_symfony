<?php

/* iimBlogBundle:Article:edit.html.twig */
class __TwigTemplate_931982912801acef34c79e868431b1ec00dce5e9120bd4dbecb9d8dbfe6e8688 extends Twig_Template
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
                <h1>Modifier l'article</h1>

                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">
                            Back to the list
                        </a>
                    </li>
                    <li>";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                </ul>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "iimBlogBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  45 => 15,  38 => 11,  31 => 6,  28 => 5,);
    }
}

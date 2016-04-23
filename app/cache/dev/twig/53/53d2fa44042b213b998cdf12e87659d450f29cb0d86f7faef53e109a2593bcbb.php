<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_950e25c22b9090cbef26802a9779ae0313b62c61f689b7b4273450503fa576f5 extends Twig_Template
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
        $__internal_9eb851f845c1ad11ea769db5256d3ac7b3b800d2460ac94157f550bd1a4cbd45 = $this->env->getExtension("native_profiler");
        $__internal_9eb851f845c1ad11ea769db5256d3ac7b3b800d2460ac94157f550bd1a4cbd45->enter($__internal_9eb851f845c1ad11ea769db5256d3ac7b3b800d2460ac94157f550bd1a4cbd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9eb851f845c1ad11ea769db5256d3ac7b3b800d2460ac94157f550bd1a4cbd45->leave($__internal_9eb851f845c1ad11ea769db5256d3ac7b3b800d2460ac94157f550bd1a4cbd45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

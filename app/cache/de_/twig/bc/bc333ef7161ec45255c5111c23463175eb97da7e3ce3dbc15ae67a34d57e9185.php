<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_d4343affef33092e15032a76c8304a057bd10313b75824239d8f302fbfa48969 extends Twig_Template
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
        $__internal_7c40c7308765e81eacfe891cebe3517b4ca3a647e3a1bbfee092ecb549f8fdaf = $this->env->getExtension("native_profiler");
        $__internal_7c40c7308765e81eacfe891cebe3517b4ca3a647e3a1bbfee092ecb549f8fdaf->enter($__internal_7c40c7308765e81eacfe891cebe3517b4ca3a647e3a1bbfee092ecb549f8fdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_7c40c7308765e81eacfe891cebe3517b4ca3a647e3a1bbfee092ecb549f8fdaf->leave($__internal_7c40c7308765e81eacfe891cebe3517b4ca3a647e3a1bbfee092ecb549f8fdaf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
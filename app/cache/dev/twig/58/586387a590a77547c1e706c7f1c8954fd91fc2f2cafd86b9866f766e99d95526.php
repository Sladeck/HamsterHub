<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6147e9a7e45e40f5dfcb701f260b2145055b586ab7c197112ef997ba1e8984f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4f0d38cf512064c39166cdaef2606dd31a9a6a4932d358fdad1e7ca0d4f318c = $this->env->getExtension("native_profiler");
        $__internal_e4f0d38cf512064c39166cdaef2606dd31a9a6a4932d358fdad1e7ca0d4f318c->enter($__internal_e4f0d38cf512064c39166cdaef2606dd31a9a6a4932d358fdad1e7ca0d4f318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f0d38cf512064c39166cdaef2606dd31a9a6a4932d358fdad1e7ca0d4f318c->leave($__internal_e4f0d38cf512064c39166cdaef2606dd31a9a6a4932d358fdad1e7ca0d4f318c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f725fa81b8069da9ef36dca6a62a165e09bfdc4e1652b695280fd4434424afa2 = $this->env->getExtension("native_profiler");
        $__internal_f725fa81b8069da9ef36dca6a62a165e09bfdc4e1652b695280fd4434424afa2->enter($__internal_f725fa81b8069da9ef36dca6a62a165e09bfdc4e1652b695280fd4434424afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f725fa81b8069da9ef36dca6a62a165e09bfdc4e1652b695280fd4434424afa2->leave($__internal_f725fa81b8069da9ef36dca6a62a165e09bfdc4e1652b695280fd4434424afa2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3de56e6745be982ba8db9f6bd7f27e939cd126d5c5b70628798492c2b591c305 = $this->env->getExtension("native_profiler");
        $__internal_3de56e6745be982ba8db9f6bd7f27e939cd126d5c5b70628798492c2b591c305->enter($__internal_3de56e6745be982ba8db9f6bd7f27e939cd126d5c5b70628798492c2b591c305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3de56e6745be982ba8db9f6bd7f27e939cd126d5c5b70628798492c2b591c305->leave($__internal_3de56e6745be982ba8db9f6bd7f27e939cd126d5c5b70628798492c2b591c305_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ec35c9c05026c101dbf53f49a36b7922ce384efacaa5710a1babb8174543d2c = $this->env->getExtension("native_profiler");
        $__internal_4ec35c9c05026c101dbf53f49a36b7922ce384efacaa5710a1babb8174543d2c->enter($__internal_4ec35c9c05026c101dbf53f49a36b7922ce384efacaa5710a1babb8174543d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ec35c9c05026c101dbf53f49a36b7922ce384efacaa5710a1babb8174543d2c->leave($__internal_4ec35c9c05026c101dbf53f49a36b7922ce384efacaa5710a1babb8174543d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

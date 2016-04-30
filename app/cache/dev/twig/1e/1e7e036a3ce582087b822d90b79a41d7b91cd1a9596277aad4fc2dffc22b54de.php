<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f34bd5d6d01e7327d325da0356db5afea871c45adc9afd1e432dbd6a8650fa9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f563f04f05e3a04208608e7159cae8d5d639e61772da7e920dbb793db1044e8e = $this->env->getExtension("native_profiler");
        $__internal_f563f04f05e3a04208608e7159cae8d5d639e61772da7e920dbb793db1044e8e->enter($__internal_f563f04f05e3a04208608e7159cae8d5d639e61772da7e920dbb793db1044e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    </head>
    <body>
      ";
        // line 8
        $this->loadTemplate("HamsterHubBundle:Base:menu.html.twig", "@FOSUser/layout.html.twig", 8)->display($context);
        // line 9
        echo "        <div>
          toto
            ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 17
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 19
        echo "        </div>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
        
        $__internal_f563f04f05e3a04208608e7159cae8d5d639e61772da7e920dbb793db1044e8e->leave($__internal_f563f04f05e3a04208608e7159cae8d5d639e61772da7e920dbb793db1044e8e_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f517a697f32154d3f0c42e3731d9340dd1cc22ef999a11106c345daa05a31f3 = $this->env->getExtension("native_profiler");
        $__internal_0f517a697f32154d3f0c42e3731d9340dd1cc22ef999a11106c345daa05a31f3->enter($__internal_0f517a697f32154d3f0c42e3731d9340dd1cc22ef999a11106c345daa05a31f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_0f517a697f32154d3f0c42e3731d9340dd1cc22ef999a11106c345daa05a31f3->leave($__internal_0f517a697f32154d3f0c42e3731d9340dd1cc22ef999a11106c345daa05a31f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  115 => 30,  105 => 32,  103 => 30,  99 => 28,  93 => 27,  84 => 24,  79 => 23,  74 => 22,  70 => 21,  66 => 19,  58 => 17,  52 => 14,  48 => 13,  43 => 12,  41 => 11,  37 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*     </head>*/
/*     <body>*/
/*       {% include 'HamsterHubBundle:Base:menu.html.twig' %}*/
/*         <div>*/
/*           toto*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */

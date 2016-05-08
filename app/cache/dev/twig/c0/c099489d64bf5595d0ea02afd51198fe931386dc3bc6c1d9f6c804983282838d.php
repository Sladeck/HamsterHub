<?php

/* @HamsterHub/Base/menu.html.twig */
class __TwigTemplate_5822eb7e7eb9815d63f1bf37aafb9186728e8f876c603fb36391aa84ba19cd62 extends Twig_Template
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
        $__internal_35afcdad6e8f053f2ab4e9668f634eb42f4757bd14c26c72baba908741c2a82a = $this->env->getExtension("native_profiler");
        $__internal_35afcdad6e8f053f2ab4e9668f634eb42f4757bd14c26c72baba908741c2a82a->enter($__internal_35afcdad6e8f053f2ab4e9668f634eb42f4757bd14c26c72baba908741c2a82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/menu.html.twig"));

        // line 1
        echo "<nav id='cssmenu'>
    <ul>
       <li class='active'><a href='/'><span>Accueil</span></a></li>
       ";
        // line 4
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 5
            echo "          <li><a href='/profile'><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span></a>
            <ul>
              <li><a href=\"/profile/edit\">Modifier Mon Profil</a></li>
              <li><a href=\"/myVideo/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\">Mes vidéos</a></li>
            </ul>
          </li>
          <li id=\"postVids\"><a><span>Poster une vidéo</span></a></li>
          <li class=\"last\"><a href='/logout'><span>Déconnexion</span></a></li>
       ";
        } else {
            // line 14
            echo "          <li id=\"logIn\"><a><span>Connexion</span></a></li>
          <li id=\"register\" class=\"last\"><a><span>Inscription</span></a></li>
       ";
        }
        // line 17
        echo "    </ul>
</nav>
";
        // line 19
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 20
            echo "  <div class=\"uploadPopUp\">
    <form id=\"upload\" method=\"post\" class=\"modal-content\">
      <span class=\"close\">x</span>
        <h1>Mettre un post en ligne : </h1><br>
        <input type=\"text\" name=\"name\" placeholder=\"Titre\" required><br><br>
        <input type=\"text\" name=\"url\" placeholder=\"Url\" required><br><br>
        <input type=\"text\" name=\"description\" placeholder=\"Description\" required><br><br>
        <input type=\"submit\" name=\"formVideo\" value=\"OK\">
    </form>
  </div>
";
        }
        // line 31
        echo "<div class=\"registerPopUp\">
  <div class=\"modal-content\">
    <span class=\"close\">x</span>
    ";
        // line 34
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 35
        echo "  </div>
</div>
<div class=\"loginPopUp\">
  <div class=\"modal-content\">
    <span class=\"close\">x</span>
    ";
        // line 40
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_security_login"), array());
        // line 41
        echo "  </div>
</div>
";
        
        $__internal_35afcdad6e8f053f2ab4e9668f634eb42f4757bd14c26c72baba908741c2a82a->leave($__internal_35afcdad6e8f053f2ab4e9668f634eb42f4757bd14c26c72baba908741c2a82a_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  83 => 40,  76 => 35,  74 => 34,  69 => 31,  56 => 20,  54 => 19,  50 => 17,  45 => 14,  36 => 8,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <nav id='cssmenu'>*/
/*     <ul>*/
/*        <li class='active'><a href='/'><span>Accueil</span></a></li>*/
/*        {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*           <li><a href='/profile'><span>{{app.user.username}}</span></a>*/
/*             <ul>*/
/*               <li><a href="/profile/edit">Modifier Mon Profil</a></li>*/
/*               <li><a href="/myVideo/{{ app.user.username }}">Mes vidéos</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <li id="postVids"><a><span>Poster une vidéo</span></a></li>*/
/*           <li class="last"><a href='/logout'><span>Déconnexion</span></a></li>*/
/*        {% else %}*/
/*           <li id="logIn"><a><span>Connexion</span></a></li>*/
/*           <li id="register" class="last"><a><span>Inscription</span></a></li>*/
/*        {% endif %}*/
/*     </ul>*/
/* </nav>*/
/* {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*   <div class="uploadPopUp">*/
/*     <form id="upload" method="post" class="modal-content">*/
/*       <span class="close">x</span>*/
/*         <h1>Mettre un post en ligne : </h1><br>*/
/*         <input type="text" name="name" placeholder="Titre" required><br><br>*/
/*         <input type="text" name="url" placeholder="Url" required><br><br>*/
/*         <input type="text" name="description" placeholder="Description" required><br><br>*/
/*         <input type="submit" name="formVideo" value="OK">*/
/*     </form>*/
/*   </div>*/
/* {% endif %}*/
/* <div class="registerPopUp">*/
/*   <div class="modal-content">*/
/*     <span class="close">x</span>*/
/*     {% render url('fos_user_registration_register') %}*/
/*   </div>*/
/* </div>*/
/* <div class="loginPopUp">*/
/*   <div class="modal-content">*/
/*     <span class="close">x</span>*/
/*     {% render url('fos_user_security_login') %}*/
/*   </div>*/
/* </div>*/
/* */
